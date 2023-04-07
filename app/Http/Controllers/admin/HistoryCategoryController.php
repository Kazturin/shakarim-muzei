<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HistoryCategory;
use Illuminate\Http\Request;

class HistoryCategoryController extends Controller
{
    public function index()
    {

        $data = HistoryCategory::all();

        return view('admin.history-category.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {

        return view('admin.history-category.create');
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
            'name_kz' => ['required', 'string', 'max:255'],
            'name_ru' => ['required', 'string', 'max:255'],
            'name_en' => ['required', 'string', 'max:255'],
            'sort' => 'integer',
        ]);

        HistoryCategory::create($data);

        return redirect()->route('history-category.index');
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
     * @param  HistoryCategory $historyCategory
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(HistoryCategory $historyCategory)
    {
        return view('admin.history-category.edit',['historyCategory'=>$historyCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  HistoryCategory $historyCategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, HistoryCategory $historyCategory)
    {
        $data = $request->validate([
            'name_kz' => ['required', 'string', 'max:255'],
            'name_ru' => ['required', 'string', 'max:255'],
            'name_en' => ['required', 'string', 'max:255'],
            'sort' => 'integer',
        ]);

        $historyCategory->update($data);

        return redirect()->route('history-category.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  HistoryCategory $faculty
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(HistoryCategory $historyCategory)
    {
        $historyCategory->delete();

        return redirect()->route('history-category.index');
    }
}
