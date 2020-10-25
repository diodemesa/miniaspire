<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Predmond\Calculator\Calculator;

use Tests\TestCase;
use Predmond\Calculator\Config;

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
        if ( ! file_exists('fixtures/config.php'))
            throw new Exception("File 'fixtures/config.php' not found");
     
        $config = include 'fixtures/config.php';
     
        if ( ! is_array($config))
            throw new Exception("File 'fixtures/config.php' should contain an array");
    }

    /**
     * @Given the option :option is configured to :value
     */
    public function theOptionIsConfiguredTo($option, $value)
    {
        $config = include 'fixtures/config.php';
     
        if ( ! is_array($config)) $config = [];
     
        $config[$option] = $value;
     
        $content = "<?php\n\nreturn " . var_export($config, true) . ";\n";
     
        file_put_contents('fixtures/config.php', $content);
    }

    /**
     * @When I load the configuration file
     */
    public function iLoadTheConfigurationFile()
    {
        $this->config = Config::load('fixtures/config.php'); // Taylor!
    }

    /**
     * @Then I should get :value as :option option
     */
    public function iShouldGetAsOption($value, $option)
    {
        $actual = $this->config->get($option); // Taylor!
     
        if ( ! strcmp($value, $actual) == 0)
            throw new Exception("Expected {$actual} to be '{$option}'.");
    }

    /**
     * @Given the option :option is not yet configured
     */
    public function theOptionIsNotYetConfigured($option)
    {
        $config = include 'fixtures/config.php';
     
        if ( ! is_array($config)) $config = [];
     
        unset($config[$option]);
     
        $content = "<?php\n\nreturn " . var_export($config, true) . ";\n";
     
        file_put_contents('fixtures/config.php', $content);
    }
    /**
     * @Then I should get default value :default as :option option
     */
    public function iShouldGetDefaultValueAsOption($default, $option)
    {
        $actual = $this->config->get($option, $default); // Taylor!
     
        if ( ! strcmp($default, $actual) == 0)
            throw new Exception("Expected {$actual} to be '{$default}'.");
    }

    /**
     * @When I set the :option configuration option to :value
     */
    public function iSetTheConfigurationOptionTo($option, $value)
    {
        $this->config->set($option, $value); // Taylor!
    }
}
