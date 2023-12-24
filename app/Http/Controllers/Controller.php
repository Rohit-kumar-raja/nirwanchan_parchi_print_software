<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function insert_image($image, $folder)
    {
        $folder = env('DIR') . $folder;
        $fileName = date('Ymdhis')  . $image->getClientOriginalName();
        $destinationPath = $folder.'/' . $fileName;

        Storage::disk('s3')->put($destinationPath, file_get_contents($image));
        $imageName = Storage::disk('s3')->url($destinationPath);
        return $imageName;
    }

    function update_images($table_name, $id, $image, $folder, $column_name = "image")
    {
        // $destinationPath = env('DIR') . $folder . '/';
        $image_name = DB::table($table_name)->find($id);

        // if ($image_name->$column_name == '') {
        $image_name = time() . "_" . $image->getClientOriginalName();
        // } else {
        //     $data = explode("/", $image_name->$column_name);
        //     $image_name = end($data);
        // }
        $destinationPath = $folder . $image_name;
        // $image->move($destinationPath, $image_name);
        Storage::disk('s3')->put($destinationPath, file_get_contents($image));
        $image_name = Storage::disk('s3')->url($destinationPath);
        DB::table($table_name)->where('id', $id)->update([$column_name =>  $image_name]);
    }
}
