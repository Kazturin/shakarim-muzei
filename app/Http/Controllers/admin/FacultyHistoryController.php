<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FacultyHistoryRequest;
use App\Models\Faculty;
use App\Models\FacultyHistory;
use Illuminate\Http\Request;

class FacultyHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = FacultyHistory::with('faculty')->get();

        return view('admin.faculty-history.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $faculties = Faculty::all();

        return view('admin.faculty-history.create',compact('faculties'));
    }

    /**
     * @param  FacultyHistoryRequest  $request
     */

    public function store(FacultyHistoryRequest $request)
    {
        $data = $request->validated();

        FacultyHistory::create($data);

        return redirect()->route('faculty-history.index');
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
     * @param  \App\Models\FacultyHistory $facultyHistory
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(FacultyHistory $facultyHistory)
    {
        $faculties = Faculty::all();

        return view('admin.faculty-history.edit',compact(['faculties','facultyHistory']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\RedirectResponse $request
     * @param  \App\Models\FacultyHistory $facultyHistory
     */

    public function update(FacultyHistoryRequest $request, FacultyHistory $facultyHistory)
    {
        $data = $request->validated();

        $facultyHistory->update($data);

        return redirect()->route('faculty-history.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacultyHistory $facultyHistory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(FacultyHistory $facultyHistory)
    {
        $facultyHistory->delete();

        return redirect()->route('faculty-history.index');
    }
}
