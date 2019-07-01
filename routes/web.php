<?php

Route::get("/", "CalculatorController@index");
Route::get("calculator", "CalculatorController@index");

Route::post("calculate", "CalculatorController@calculate");