<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArchiveRequest;
use App\Models\Archive;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = Archive::all();

        return view('admin.archive.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.archive.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ArchiveRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ArchiveRequest $request)
    {
        $data = $request->validated();

        if(isset($data['file'])){
            $data['filename'] = $request->file('file')->store('uploads/archives','public');
        }

        Archive::create($data);

        return redirect()->route('archives.index')->with('success', 'Успешно добавлен');
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
     * @param  Archive $archive
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Archive $archive)
    {
        return view('admin.archive.edit',compact('archive'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ArchiveRequest  $request
     * @param  \App\Models\Archive $archive
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ArchiveRequest $request, Archive $archive)
    {
        $data = $request->validated();

        if(isset($data['file'])){
            $data['filename'] = $request->file('file')->store('uploads/archives','public');
        }

        $archive->update($data);

        return redirect()->route('archives.index')->with('success', 'Успешно изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Archive $archive
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Archive $archive)
    {
        if ($archive->filename) {
            $absolutePath = public_path('storage/'.$archive->filename);
            \Illuminate\Support\Facades\File::delete($absolutePath);
        }

        $archive->delete();

        return redirect()->route('archives.index')->with('success', 'Успешно удален');
    }
}
