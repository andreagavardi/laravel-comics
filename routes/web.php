<?php

//use App\Http\Controllers\Admin\ComicController;
use Faker\Guesser\Name;
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

Route::get('/', 'PageController@index')->name('home');
Route::get('/admin', 'PageController@admin')->name('admin.index');

/* Comics routes */
/* Route::get('/comics', function () {
    $comics = config('comics');
    $comics_collection = collect($comics);


    return view('comics.index', compact('comics_collection'));
})->name('comics');

Route::get('/comics/create', function () {

    return view('comics.create');
})->name('comics.create');

Route::post('/comics', function () {
})->name('comics.store');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    if (is_numeric($id) && $id < count($comics) && $id >= 0) {

        $comic = $comics[$id];
    } else {
        abort(404);
    }
    //ddd($comic);
    return view('comics.show', compact('comic'));
})->name('comic'); */


Route::resource('comics', 'ComicController')->only(['index', 'show']); //esercizio completo con model e controller

/* END Comics routes */

Auth::routes();
Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('comics', ComicController::class);
});
