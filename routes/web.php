<?php

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

Route::get('/', function () {

    return view('home');
})->name('home');


/* Comics routes */
Route::get('/comics', function () {
    $comics = config('comics');
    $comics_collection = collect($comics);


    return view('comics.index', compact('comics_collection'));
})->name('comics');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    if (is_numeric($id) && $id < count($comics) && $id >= 0) {

        $comic = $comics[$id];
    } else {
        abort(404);
    }
    //ddd($comic);
    return view('comics.show', compact('comic'));
})->name('comic');


/* END Comics routes */
