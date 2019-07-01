<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calculator;
use App\Http\Interfaces\OperatorInterface;


class CalculatorController extends Controller
{
	protected $result = 0;
	protected $operation;

    public function index($value='')
    {
       return view('calculator')->with('result', $this->getResult());
    }

    public function calculate(Request $request)
    {
    	
        $request->validate([
            'result' => ['required','integer'],
            'number' => ['integer'],
            'operation' => ['required','string'],
        ]);

        $operationClass = 'App\\Http\\Operations\\' . $request->operation;
        $this->setOperation(new $operationClass);

		$this->operate($request->result, $request->number);
		
        return view('calculator')->with('result', $this->getResult());
    }

    private function setOperation(OperatorInterface $operation)
    {
    	$this->operation = $operation;
    }

    private function operate(int $result, int $number) 
    {
        $this->result = $this->operation->operate($result, $number);
	}

    protected function getResult() :int
    {
        return $this->result;
    }
}

