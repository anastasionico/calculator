	<?php

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

// Route::get('/', function () {

//     return view('calculator', compact('result'));
// });
// Route::get('/calculator', function () {
//     return view('calculator', compact('result'));
// });


Route::get("/", "CalculatorController@index");
Route::get("calculator", "CalculatorController@index");

Route::post("calculate", "CalculatorController@calculate");



