<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\FacultyHistory;
use App\Models\Welcome;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index($faculty_id=null)
    {
        $history = $faculty_id ? FacultyHistory::where('faculty_id',$faculty_id)->first():FacultyHistory::first();

        $faculties = Faculty::all();

        return view('site.index',compact(['history','faculties']));
    }

    public function virtualTour(){

        return view('site.virtual-tour');
    }
}
