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
	}
}
