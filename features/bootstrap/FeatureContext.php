<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Predmond\Calculator\Calculator;

use Tests\TestCase;

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
        $this->calculator = new Calculator();
        $this->calculator->$arg1($arg2, $arg3);
    }

    /**
     * @Then the calculated value should be :arg1
     */
    public function theCalculatedValueShouldBe($arg1)
    {
        TestCase::assertEquals($arg1, $this->calculator->result());
    }

    /**
     * @Given there is a configuration file
     */
    public function thereIsAConfigurationFile()
    {
        throw new PendingException();
    }

    /**
     * @Given the option :arg1 is configured to :arg2
     */
    public function theOptionIsConfiguredTo($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I load the configuration file
     */
    public function iLoadTheConfigurationFile()
    {
        throw new PendingException();
    }

    /**
     * @Then I should get :arg1 as :arg2 option
     */
    public function iShouldGetAsOption($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Given the option :arg1 is not yet configured
     */
    public function theOptionIsNotYetConfigured($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should get default value :arg1 as :arg2 option
     */
    public function iShouldGetDefaultValueAsOption($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I set the :arg1 configuration option to :arg2
     */
    public function iSetTheConfigurationOptionTo($arg1, $arg2)
    {
        throw new PendingException();
    }
}
