<?php

namespace spec\Predmond\Calculator;

use PhpSpec\ObjectBehavior;
use Predmond\Calculator\LoanCollection;
use Predmond\Calculator\Loan;

class LoanCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(LoanCollection::class);
    }
    function it_adds_a_loan_to_the_collection(Loan $loan, Loan $anotherLoan)
	{
	    $this->add($loan);
	    $this->loans[0]->shouldBe($loan);
	 
	    $this->add($anotherLoan);
	    $this->loans[1]->shouldBe($anotherLoan);
	}
	function it_is_countable()
	{
	    $this->shouldImplement('Countable');
	}
	function it_counts_elements_of_the_collection()
	{
	    $this->count()->shouldReturn(0);

	    $this->loans = ['foo'];
    	$this->count()->shouldReturn(1);
	}
}
