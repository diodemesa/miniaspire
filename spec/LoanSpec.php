<?php

namespace spec\Predmond\Calculator;

use PhpSpec\ObjectBehavior;
use Predmond\Calculator\Loan;

class LoanSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Loan::class);
    }
}
