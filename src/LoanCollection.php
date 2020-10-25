<?php

namespace Predmond\Calculator;

class LoanCollection implements \Countable
{
	public $loans = array();

    public function add(Loan $loan)
    {
        $this->loans[] = $loan;
    }
    public function count()
	{
	    return count($this->loans);
	}
}
