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

Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionary', function (Illuminate\Http\Request $request) {
    $lang = array("Hello" => "Xin chao", "Goodbye" => "Tam biet", "Thank you" => "Cam on", "Book" => "Quyen sach", "Computer" => "May tinh");
    foreach ($lang as $key => $word) {
        if ($request->keyword == $key){
            $message = $key. ':' .$word;
            return view('dictionary',compact(['message']));
        }
    }
    $message = "Not found";
    return view('dictionary',compact(['message']));


});
