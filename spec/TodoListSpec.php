<?php

namespace spec\Predmond\Calculator;

use PhpSpec\ObjectBehavior;
use Predmond\Calculator\TodoList;

class TodoListSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TodoList::class);
    }
}
