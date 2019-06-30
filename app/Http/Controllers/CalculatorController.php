<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
	protected $result = 0;

	protected $operation;

    public function calculate (Request $request)
    {
    	$request->validate([
            'number' => ['required','integer'],
            'operation' => ['required','string'],
        ]);

    	
    }
}
