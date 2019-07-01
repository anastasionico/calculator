<?php

namespace App\Http\Operations;

use App\Http\Interfaces\OperatorInterface;

class Adder implements OperatorInterface
{
    public function operate (int $result, int $number) 
    {
    	
    	return $result + $number;
    }
}
