<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExhibitRequest;
use App\Models\Exhibit;
use App\Models\ExhibitCategory;
use Illuminate\Http\Request;

class ExhibitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $exhibits = Exhibit::paginate(10);

        return view('admin.exhibit.index',['exhibits'=>$exhibits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = ExhibitCategory::all();

        return view('admin.exhibit.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ExhibitRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ExhibitRequest $request)
    {
        $data = $request->validated();

        if(isset($data['image'])){
            $data['image'] = $request->file('image')->store('uploads','public');
        }

        Exhibit::create($data);

        return redirect()->route('exhibits.index');
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
     * @param  Exhibit $exhibit
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Exhibit $exhibit)
    {
        $categories = ExhibitCategory::all();

        return view('admin.exhibit.edit',['exhibit'=>$exhibit,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ExhibitRequest  $request
     * @param  Exhibit $exhibit
     */
    public function update(ExhibitRequest $request, Exhibit $exhibit)
    {
        $data = $request->validated();

        if(isset($data['image'])){
            $data['image'] = $request->file('image')->store('uploads','public');
        }

        $exhibit->update($data);

        return redirect()->route('exhibits.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
