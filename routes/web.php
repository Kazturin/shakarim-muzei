<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/exhibits', [\App\Http\Controllers\ExhibitController::class,'index'])->name('exhibits');
Route::get('/exhibit/{exhibit}', [\App\Http\Controllers\ExhibitController::class,'show'])->name('exhibit');
Route::get('/exhibits/category/{category_id}', [\App\Http\Controllers\ExhibitController::class,'category'])->name('exhibits.category');
Route::get('/virtual-tour', [\App\Http\Controllers\SiteController::class,'virtualTour'])->name('virtualTour');
Route::get('/archives',[\App\Http\Controllers\SiteController::class,'archives'])->name('archives');


Route::post('language', function (Request $request) {
//dd($request->locale);
//die();
    app()->setLocale($request->locale);
    session()->put('locale', $request->locale);
    return redirect()->back();
})->name('language');

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->group(function () {
        Route::resource('roles', \App\Http\Controllers\admin\RolesController::class)->middleware('role:admin');
        Route::resource('users',\App\Http\Controllers\admin\UserController::class)->middleware('role:admin');
        Route::resource('welcomes',\App\Http\Controllers\admin\WelcomeController::class);
        Route::resource('exhibit-categories',\App\Http\Controllers\admin\ExhibitCategoryController::class);
        Route::resource('exhibits',\App\Http\Controllers\admin\ExhibitController::class);
        Route::resource('history-category',\App\Http\Controllers\admin\HistoryCategoryController::class);
        Route::resource('history',\App\Http\Controllers\admin\HistoryController::class);
        Route::resource('archives',\App\Http\Controllers\admin\ArchiveController::class);
        Route::post('ckeditor/upload', [\App\Http\Controllers\CKEditorController::class,'upload'])->name('ckeditor.image-upload');
    });
});

require __DIR__.'/auth.php';

Route::get('/{category_id?}', [\App\Http\Controllers\SiteController::class,'index'])->name('home');
