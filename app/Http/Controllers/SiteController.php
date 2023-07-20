<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\HistoryCategory;
use App\Models\History;
use App\Models\Welcome;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index($category_id=null)
    {
        $categories = HistoryCategory::orderBy('sort')->get();

        $history = $category_id ? History::where('category_id',$category_id)->first():History::where('category_id',$categories[0]->id)->first();


        return view('site.index',compact(['history','categories']));
    }

    public function virtualTour(){

        return view('site.virtual-tour');

    }

    public function archives(){

        $archives = Archive::all();

        return view('site.archive',compact('archives'));

    }
}
