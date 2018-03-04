<?php

namespace App\Http\Controllers;

use App\MissionVisions;
use Illuminate\Http\Request;

class MissionVisionsController extends Controller{
    public function index(MissionVisions $missionvission){
    	$missionvision= $missionvission->find(1);
    	//dd($missionvision);
    	return view('missionvision/index', compact('missionvision'));
    	//return view ('missionvision/index')-> with('missionvision',$missionvision);
       
    }

}
