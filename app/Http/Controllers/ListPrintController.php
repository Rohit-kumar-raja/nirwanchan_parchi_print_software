<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\Models\Note;

class ListPrintController extends Controller
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
        return view('list.index', compact('page', 'assembly', 'section'));
    }

    public function tablePrint(Request $request)
    {
        $assembly_name = $request->assembly_name;
        if ($assembly_name == null) {
            $data['data'] = Note::all();
        } else {
            if ($request->section == 'all') {
                $data['data'] = Note::where('assembly_name', $assembly_name)->orderBy('nirwachan_name')->get();
            } else {
                $data['data'] = Note::where('assembly_name', $assembly_name)->where('section', $request->section)->orderBy('nirwachan_name')->get();
            }
        }
        $data['page'] = $this->page;
        return view('list.table_print', $data);
    }

    public function assembyChange(Request $request)
    {

        $sections = DB::table('notes')->distinct('section')->where('assembly_name', $request->assembly_name)->get(['section']);

        foreach ($sections as $section) {
            echo "<option value='{$section->section}'>{$section->section} </option>";
        }
    }
}
