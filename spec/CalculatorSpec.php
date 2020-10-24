<?php

namespace spec\Predmond\Calculator;

use PhpSpec\ObjectBehavior;
use Predmond\Calculator\Calculator;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Calculator::class);
    }
    function it_can_add_two_numbers()
	{
		$this->add(2,3)->shouldReturn(5);
    	$this->add(10, 0)->shouldReturn(10);
    	$this->add(0, 0)->shouldReturn(0);
    	$this->add(1, -2)->shouldReturn(-1);
	}
	function it_can_divide_two_numbers()
	{
	    $this->divide(10, 2)->shouldReturn(5);
	}

	function it_throws_a_division_by_zero_excption()
	{
	    $this->shouldThrow('\Predmond\Calculator\DivisionByZeroException')->duringDivide(10, 0);
	}
}
