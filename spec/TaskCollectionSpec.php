<?php

namespace spec\Predmond\Calculator;

use PhpSpec\ObjectBehavior;
use Predmond\Calculator\TaskCollection;
use Predmond\Calculator\Task;

class TaskCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TaskCollection::class);
    }
    function it_adds_a_task_to_the_collection(Task $task)
    {
    	$this->add($task);
    	$this->tasks[0]->shouldBe($task);
    }
}
