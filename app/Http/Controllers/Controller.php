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
        $image->move($folder, $fileName);
        return $folder . '/' . $fileName;
    }
}
