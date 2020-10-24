<?php

namespace Predmond\Calculator;

use Predmond\Calculator\Markdown\Writer;

class Markdown implements Writer
{
    public function __construct($argument1)
    {
        // TODO: write logic here
    }

    public function toHtml($argument1)
    {
        return "<p>Hi, there</p>";
    }

    public function outputHtml($argument1)
    {
        return $this->writeText("<p>Hi, there</p>");
    }
    function writeText($argument1){
    	return $argument1;
    }

}
