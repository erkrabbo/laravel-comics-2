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
Route::get('/characters', function () {
    return view('guest.pages.characters');
})->name('characters');

Route::get('/', function () {
    $data = [
        'series' => config('comics')
    ];
    return view('guest.pages.comicsmain', $data);
})->name('comics');

Route::get('/{id}', function ($id) {
    $db = collect(config('comics'));
    $selected = $db->firstWhere('id', $id);
    if($selected == null) abort(404);
    return view('guest.pages.comic-details', ['sel' => $selected]);
});

