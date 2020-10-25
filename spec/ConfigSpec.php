<?php

namespace spec\Predmond\Calculator;

use PhpSpec\ObjectBehavior;
use Predmond\Calculator\Config;

class ConfigSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Config::class);
    }
}
