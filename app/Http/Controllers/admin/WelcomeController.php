<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $model = Welcome::all();
        return view('admin.welcome.index',['model'=>$model]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.welcome.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title_kz' => ['required', 'string', 'max:255'],
            'content_kz' => ['required', 'string'],
            'title_ru' => ['required', 'string', 'max:255'],
            'content_ru' => ['required', 'string'],
            'title_en' => ['string', 'max:255'],
            'content_en' => ['string'],
        ]);

        Welcome::create($data);

        return redirect()->route('welcomes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Welcome
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Welcome $welcome)
    {
        return view('admin.welcome.edit',['model'=>$welcome]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Welcome $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,Welcome $welcome)
    {
        $data = $request->validate([
            'title_kz' => ['required', 'string', 'max:255'],
            'content_kz' => ['required', 'string'],
            'title_ru' => ['required', 'string', 'max:255'],
            'content_ru' => ['required', 'string'],
            'title_en' => ['string', 'max:255'],
            'content_en' => ['string'],
        ]);

        $welcome->update($data);

        return redirect()->route('welcomes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Welcome  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Welcome $welcome)
    {
        $welcome->delete();

        return redirect()->route('welcomes.index');
    }
}
