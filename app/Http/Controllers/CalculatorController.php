<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calculator;
use App\Http\Operations\Adder;
use App\Http\Interfaces\OperatorInterface;


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

        $className = 'App\\Http\\Operations\\' . $request->operation;
        
        $this->setOperation(new $className);
		$this->work($request->number, $request->numberSecond);
        
        return view('calculator')->with('result', $this->getResult());
    }

    private function setOperation (OperatorInterface $operation)
    {
    	$this->operation = $operation;
    }

    private function work () 
    {
        foreach (func_get_args() as $number) {
            $this->result = $this->operation->operate($number, $this->result);
        }
    }

    public function getResult () 
    {
        return $this->result;
    }
}

