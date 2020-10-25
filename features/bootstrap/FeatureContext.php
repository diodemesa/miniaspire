<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
// class FeatureContext extends Behat\MinkExtension\Context\MinkContext implements Context, SnippetAcceptingContext
class FeatureContext extends Behat\MinkExtension\Context\MinkContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given the method :arg1 receives the numbers :arg2 and :arg3
     */
    public function theMethodReceivesTheNumbersAnd($arg1, $arg2, $arg3)
    {
        throw new PendingException();
    }

    /**
     * @Then the calculated value should be :arg1
     */
    public function theCalculatedValueShouldBe($arg1)
    {
        throw new PendingException();
    }
}
