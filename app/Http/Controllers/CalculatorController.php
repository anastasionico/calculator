<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calculator;
use App\Http\Interfaces\OperatorInterface;


class CalculatorController extends Controller
{
	protected $result = 0;
	protected $operation;

    /**
    * method invoked on /calculator
    */
    public function index()
    {
       return view('calculator')->with('result', $this->getResult());
    }

    /**
    * The form send a request to this method that select the right instance of the OperatorInterface and return the result
    */
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

    /**
    * Set the operation that will be used for the calculation
    */
    private function setOperation(OperatorInterface $operation)
    {
    	$this->operation = $operation;
    }

    /**
    * Invoke the actual operate() method from the Operation classes
    */
    private function operate(int $result, int $number) 
    {
        $this->result = $this->operation->operate($result, $number);
	}

    /**
    * Getter of the result
    */
    protected function getResult() :int
    {
        return $this->result;
    }
}

