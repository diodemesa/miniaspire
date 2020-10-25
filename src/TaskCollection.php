<?php

namespace Predmond\Calculator;

class TaskCollection implements \Countable
{
	public $tasks = array();

    public function add(Task $task)
    {
        $this->tasks[] = $task;
    }
    public function count()
	{
	    return count($this->tasks);
	}
}
