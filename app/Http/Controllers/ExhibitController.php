<?php

namespace App\Http\Controllers;

use App\Models\Exhibit;
use App\Models\ExhibitCategory;
use Illuminate\Http\Request;

class ExhibitController extends Controller
{
    public function index(){

        $language = app()->getLocale();

        $exhibits = Exhibit::paginate(12);
        $categories = ExhibitCategory::all();

        return view('exhibit.index',compact('exhibits','categories','language'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Exhibit $exhibit
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function show(Exhibit $exhibit){

        $language = app()->getLocale();
        $exhibits = Exhibit::orderByDesc('created_at')->limit(5)->get();
     //   dd($exhibits);
        return view('exhibit.show',compact('exhibit','exhibits','language'));
    }

    public function category($category_id){

        $language = app()->getLocale();
        $exhibits = Exhibit::where('category_id',$category_id)->paginate(12);
        $exhibit = Exhibit::where('category_id',$category_id)->first();

        $categories = ExhibitCategory::all();

        return view('exhibit.category',compact('exhibits','exhibit','categories','language'));
    }
}
