<?php

namespace App\Http\Operations;

use App\Http\Interfaces\OperatorInterface;

class Adder implements OperatorInterface
{
    public function operate (int $number, int $result) 
    {
        return $number + $result;
    }
}
