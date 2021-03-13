<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
    return view('welcome');
});

Route::get('test2', [TestController::class, 'testAction']);
//Route::get('test3', 'App\Http\Controllers\TestController@testAction'); just for learning

Route::get('/test', function () {
    $posts = [
        ['id' => 1, 'title' => 'Laravel', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-13'],
        ['id' => 2, 'title' => 'JS', 'posted_by' => 'Mohamed', 'created_at' => '2021-03-25'],
    ];

    return view('test', [
        'posts' => $posts
    ]);
});
