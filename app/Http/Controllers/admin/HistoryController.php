<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HistoryRequest;
use App\Models\HistoryCategory;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = History::with('category')->get();

        return view('admin.history.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = HistoryCategory::all();

        return view('admin.history.create',compact('categories'));
    }

    /**
     * @param  HistoryRequest  $request
     */

    public function store(HistoryRequest $request)
    {
        $data = $request->validated();

        History::create($data);

        return redirect()->route('history.index');
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
     * @param  \App\Models\History $history
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(History $history)
    {
        $categories = HistoryCategory::all();

        return view('admin.history.edit',compact(['categories','history']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\History $history
     *@return \Illuminate\Http\RedirectResponse $request
     */

    public function update(HistoryRequest $request, History $history)
    {
        $data = $request->validated();

        $history->update($data);

        return redirect()->route('history.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\History $facultyHistory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(History $history)
    {
        $history->delete();

        return redirect()->route('history.index');
    }
}
