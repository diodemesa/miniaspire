<?php

namespace spec\Predmond\Calculator;

use PhpSpec\ObjectBehavior;
use Predmond\Calculator\BusinessOwner;
use App\Loan;

class BusinessOwnerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(BusinessOwner::class);
    }
    function it_is_not_an_approver()
    {
    	$this->isApprover()->shouldReturn(false);
    }
    function it_can_view_own_loans()
    {
    	//Given we have task in the database
        $loan = factory('App\Loan')->create();

        //When user visit the tasks page
        $response = $this->get('/loans');
        
        //He should be able to read the task
        $response->assertSee($task->title);
    }
    function it_can_view_single_loan()
}
