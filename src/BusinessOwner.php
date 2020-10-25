<?php

namespace Predmond\Calculator;

use App\User;

class BusinessOwner extends User
{
	private $isApprover;

	public function __construct(){
		$this->isApprover = false;
	}

	public function isApprover()
	{
		return $this->isApprover;
	}
}
