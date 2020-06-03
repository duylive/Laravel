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

Route::get('/calculator', function () {

    return view('calculator');
});

Route::post('/calculator', function (\Illuminate\Http\Request $request){
   $description = $request->product;
   $price = $request->price;
   $percent = $request->discount;
   $discountAmount = $price * $percent * 0.01;
   $discountPrice = $price - $discountAmount;
   return view('calculator', compact(['description'],'price', 'percent', 'discountAmount', 'discountPrice'));
});




