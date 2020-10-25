<?php

namespace Predmond\Calculator;

class Calculator
{
    public function add($argument1, $argument2)
    {
        return $argument1 + $argument2;
    }

    public function divide($numerator, $denominator)
    {
        if ($denominator === 0) {
	        throw new DivisionByZeroException();
	    }

	    return $numerator / $denominator;
    }

    public function sum($argument1, $argument2)
    {
        $this->result = (int)$argument1 + (int)$argument2;
    }

    public function result()
    {
        return $this->result;
    }
    
}
