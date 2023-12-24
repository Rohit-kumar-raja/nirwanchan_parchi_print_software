<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use App\Models\City;
use App\Models\Clinic;
use App\Models\Degree;
use App\Models\Doctor;
use App\Models\Feedback;
use App\Models\MedicalDepartment;
use App\Models\Specialization;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $Clinic=0;
        $Doctor=0;
        $AppUser=AppUser::where('deleted_at',null)->count();
        $City=0;
        $Specialization=0;
        $Degree=0;
        $Feedback=Feedback::where('deleted_at',null)->count();
        // $MedicalDepartment=MedicalDepartment::where('deleted_at',null)->groupBy('medical_department_id')->count();

        return view('dashboard',compact('Doctor','Clinic','City','Specialization','AppUser','Degree','Feedback'));
    }
}
