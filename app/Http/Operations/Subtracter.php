<?php

namespace App\Http\Operations;

use App\Http\Interfaces\OperatorInterface;

class Subtracter implements OperatorInterface
{
    public function operate(int $result, int $number) :int 
    {
    	return $result - $number;
    }
}
