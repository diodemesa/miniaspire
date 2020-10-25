<?php

// namespace spec\Loan;
namespace spec\Predmond\Calculator;


use Predmond\Calculator\LoanApplication;
use PhpSpec\ObjectBehavior;

class LoanApplicationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(LoanApplication::class);
    }
}
