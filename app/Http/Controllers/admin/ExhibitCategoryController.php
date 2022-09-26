<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ExhibitCategory;
use Illuminate\Http\Request;

class ExhibitCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = ExhibitCategory::paginate(10);

        return view('admin.exhibit-category.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.exhibit-category.create');
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
            'title_ru' => ['required', 'string', 'max:255'],
            'title_en' => ['string', 'max:255'],
        ]);

        ExhibitCategory::create($data);

        return redirect()->route('exhibit-categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  ExhibitCategory $exhibitCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ExhibitCategory $exhibitCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ExhibitCategory $exhibitCategory
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(ExhibitCategory $exhibitCategory)
    {
        return view('admin.exhibit-category.edit',['exhibitCategory' => $exhibitCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  ExhibitCategory $exhibitCategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, ExhibitCategory $exhibitCategory)
    {
        $data = $request->validate([
            'title_kz' => ['required', 'string', 'max:255'],
            'title_ru' => ['required', 'string', 'max:255'],
            'title_en' => ['string', 'max:255'],
        ]);

        $exhibitCategory->update($data);

        return redirect()->route('exhibit-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ExhibitCategory $exhibitCategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ExhibitCategory $exhibitCategory)
    {
        $exhibitCategory->delete();

        return redirect()->route('exhibit-categories.index');
    }
}
