<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calculator;

class CalculatorController extends Controller
{
	protected $result = 0;

	protected $operation;

    public function calculate (Request $request)
    {
        $request->validate([
            'number' => ['required','integer'],
            'numberSecond' => ['integer'],
            'operation' => ['required','string'],
        ]);

        $this->setOperation($request->operation);
    }

    private function setOperation (OperatorInterface $operation)
    {
        $this->operation = $operation;
    }
}
