<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Support\Facades\App;

class SiteController extends Controller
{
    public function index()
    {
        $welcome = Welcome::first();

        return view('site.index',['welcome'=>$welcome]);
    }
}
