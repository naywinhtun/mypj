<?php

namespace App\Http\Controllers;

use App\Department;
use App\Syllabus;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{

	public function index(Department $department)
    {
        $departments = Department::where('type','academic')->get();

        return view('departments.index', compact('departments'));
    }
    
    //each department details
    public function eachDepartment($name)
    {
        $departments = Department::where('name',$name)->get();
        return view('departments.one-department', compact('departments'));
    }

    public function departmentDayYear($id)
    {
        return Syllabus::where('department_id',$id)->get()->groupBy('year');
    }

     public function departmentDistanceYear($id)
    {
        return Syllabus::where([['department_id',$id],['distance',1]])->get()->groupBy('year');
    }

    //each department curriculum
    public function curriculum($id)
    {
        $years = $this-> departmentDayYear($id);
         // dd($years);
        return view('departments.curriculum', compact('years'));
    }
     
    //each department of all posts
	public function Posts($id)
    {
        $department = Department::find($id);

        $posts = $department->latestPosts()->paginate(2);

        return view('post-overview.index', compact('posts'));
    }
    
}
