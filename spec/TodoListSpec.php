<?php

namespace spec\Predmond\Calculator;

use PhpSpec\ObjectBehavior;
use Predmond\Calculator\TodoList;
use Predmond\Calculator\TaskCollection;
use Predmond\Calculator\Task;

class TodoListSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TodoList::class);
    }
    function it_adds_a_task_to_the_list(TaskCollection $tasks, Task $task)
    {
        $tasks->add($task)->shouldBeCalledTimes(1);
        $this->tasks = $tasks;
 
        $this->addTask($task);
    }
    function it_checks_whether_it_has_any_tasks(TaskCollection $tasks)
	{
	    $tasks->count()->willReturn(0);
	    $this->tasks = $tasks;
	 
	    $this->hasTasks()->shouldReturn(false);
	 
	    $tasks->count()->willReturn(20);
	    $this->tasks = $tasks;
	 
	    $this->hasTasks()->shouldReturn(true);
	}
}
