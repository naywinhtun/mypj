<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Syllabus;
use App\Department;
use Illuminate\Http\Request;

class SyllabusController extends Controller
{
    public function department()
    {
       
       	$departments = Department::where('type','academic')->get();
       	 /* dd($departments);*/
        return view('subjects.index', compact('departments'));


    }
     public function Subject_Detail($id)
    {
       
        $syllabi = Syllabus::find($id);;
        $departmentName = !$syllabi->department ? "no" : $syllabi->department->name;
        return view('subjects.subject-detail', compact('syllabi','departmentName'));

    }

}


