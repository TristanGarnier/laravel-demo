<?php

use App\Http\Controllers\LinkController;
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

Route::get('/', 'WelcomeController@index');

Route::get('/hello', function () {
    return view('index');
});

Route::get('/hello/{name}-{id}', function ($name, $id) {
    return "Salut $name; membre n° $id";
})->where('name', '[a-z0-9\-]+')
    ->where('id', '[0-9]+');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/hello', function () {
        return view('index');
    });
});

Route::group(['prefix' => 'links'], function () {
    Route::get('/', [LinkController::class, 'index'])->name('links.index');
    Route::get('/new', [LinkController::class, 'create'])->name('links.create');
    Route::post('/create', [LinkController::class, 'store'])->name('links.store');
    Route::get('/{link}', [LinkController::class, 'show'])->where('id', '[0-9]+');
});

Route::post('/comment', [CommentController::class, 'store'])->name('comments.store');

Route::get('/hello', function () {
    return view('index');
});
