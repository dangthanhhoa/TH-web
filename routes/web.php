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

Route::get('/hello', function () {
    return "Hello world";
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/news', 'App\Http\Controllers\NewsController@index');
Route::get('/get', 'App\Http\Controllers\MyController@index');
Route::get('/', function () {
    return array("status" => "ERR", "data" => "ACTION-NOT-FOUND");
});
Route::get('/get/{id}', function ($id) {
    return array("status" => "OK", "data" => ["masv" => $id]);
});
Route::get('/list', function () {
    return array("status" => "OK", "data" => [1, 2, 3]);
});
Route::get('/update', function () {
    return view('update');
});
Route::put('/update/{id}', function ($id) {
    return array(
        "status" => "OK", 
    "data" => json_decode(file_get_contents("php://input"), true));
});
    
Route::get('/students/{id}', function ($id) {
    return array("status" => "OK", "data" => ["masv" => $id]);
});