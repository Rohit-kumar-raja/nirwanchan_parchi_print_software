<?php

use App\Models\DoctorsDegree;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

function check_permission($permission)
{
    return Permission::where('user_id', Auth::user()->id)->where('name', $permission)->exists();
}
function get_permission($permission, $user_id)
{
    return Permission::where('user_id', $user_id)->where('name', $permission)->exists();
}

function isAdmin()
{
    if (auth()->user()->type == "superadmin") {
        return true;
    } else {
        return false;
    }
}

function clinic()
{
    return  DB::table('clinics')->where('user_id', auth()->user()->id)->first();
}
function isClinic()
{
    if (auth()->user()->type == "clinic") {
        return true;
    } else {
        return false;
    }
}


function response_data($data, $message = null, $success = true)
{
    return [
        "success" => $success,
        "message" => $message,
        "data" => $data
    ];
}

function check_degree($degree_id, $doctor_id)
{

    $data = DoctorsDegree::where('degree_id', $degree_id)->where('doctor_id', $doctor_id)->first();
    if ($data) {
        return true;
    } else {
        return false;
    }
    // print_r($degree_id);
}
