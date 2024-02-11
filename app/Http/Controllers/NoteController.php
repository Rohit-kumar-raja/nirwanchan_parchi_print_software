<?php

namespace App\Http\Controllers;

use App\Imports\ParchiImport;
use App\Models\Category;
use App\Models\Note;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Exception;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $page = 'सभी  पार्ची';
    public function index(Request $request)
    {
        $page = $this->page;
        $data = DB::table('notes')->select([
            'id', 'page', 'data', 's_no', 'loksabha_name', 'assembly_name', 'both', 'part',
            'section', 'epic', 'nirwachan_name', 'relative_name', 'age', 'house', 'gender',
            'nirvachan_name_eng', 'relative_name_eng'
        ])->orderBy('nirwachan_name', 'ASC')->get();

        if ($request->ajax()) {

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = view('note.buttons', ['item' => $row, "route" => 'note', 'page' => $this->page]);
                    // $actionBtn = '';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $assembly = DB::table('notes')->distinct('assembly_name')->get(['assembly_name']);
        $section = DB::table('notes')->distinct('section')->get(['section']);
        return view('note.index', compact('page', 'assembly', 'section'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $categories = Category::where('deleted_at',null)->get();
        // $page = $this->page;
        // return view('note.insert', compact('page', 'categories'));
    }

    // no column for status in table
    public function status($id)
    {
        $status = Note::find($id);
        if ($status->status == "active") {
            Note::where('id', $id)->update(['status' => 'inactive']);
            return "InActive";
        } else {
            Note::where('id', $id)->update(['status' => 'active']);
            return "Active";
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'string|unique:notes,title',
            'video' => 'required|string|url',
            'pdf' => 'mimes:pdf|max:2040',
            'category_id' => 'required|numeric'
        ]);
        if ($validate->fails()) {
            return $validate->errors();
        } else {
            try {
                $request->request->add(['created_by' => auth()->user()->id]);
                $data =  Note::create($request->except('_token', 'pdf'));

                if ($request->hasFile('pdf')) {
                    Note::where('id', $data->id)->update(['pdf' => $this->insert_image($request->file('pdf'), 'note')]);
                }
                return response()->json(['success' => $this->page . " SuccessFully Added "]);
            } catch (Exception $e) {
                // return response()->json(['error' => $this->page . " showing somthing wrong "]);
                return response()->json(['error' => $e->getMessage()]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Note::find($id);
        $page = $this->page;
        $categories = Category::where('deleted_at', null)->get();

        return view('note.edit', compact('data', 'page', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required|string|unique:notes,title,' . $id,
            'video' => 'required|string|url',
            'pdf' => 'mimes:pdf|max:2040',
            'category_id' => 'required|numeric'
        ]);
        // if ($validate->fails()) {
        if (0) {
            return $validate->errors();
        } else {
            try {
                $request->request->add(['updated_by' => auth()->user()->id]);
                Note::where('id', $id)->update($request->except(['_token', '_method', 'pdf']));
                if ($request->hasFile('pdf')) {
                    $this->update_images('notes', $id, $request->file('pdf'), 'note', 'pdf');
                }
                return response()->json(['success' => $this->page . " SuccessFully Updated "]);
            } catch (Exception $e) {
                // return response()->json(['error' => $this->page . " showing somthing wrong "]);
                return response()->json(['error' => $e->getMessage()]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // Note::where('id', $id)->update(['deleted_at' => date('Y-m-d h:i:s'),'deleted_by'=>auth()->user()->id]);
            Note::where('id', $id)->delete();
            return "Delete";
        } catch (Exception $e) {
            return response()->json(["error" => $this->page . "Can't Be Delete this May having some child"]);
        }
    }

    function print(Request $request, $id = null)
    {
        if ($request->selected_item != '') {
            $data['data'] = Note::whereIn('id', explode(',', $request->selected_item))->get();
        } else {

            if ($id == null) {
                $data['data'] = Note::all();
            } else {
                $data['data'] = Note::where('id', $id)->get();
            }
        }


        return view('note.format.'.$request->print_for, $data);
    }

    public function import(Request $request)
    {
        $file_name = $this->insert_image($request->file('file'), 'Xl');
        Excel::import(new ParchiImport, $file_name);
        unlink($file_name);
        return response()->json(['success' => $this->page . " SuccessFully Updated "]);
    }

  
}
