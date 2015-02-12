<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext {

	public function __construct() {
	}

	/**
	 * @Given /^I click "([^"]*)"$/
	 */
	public function iClick($arg1) {
		$page = $this->getSession()->getPage();
		$result = $page->find('css', $arg1);
		if ($result === NULL) {
			$message = sprintf('The element with the xpath CSS-Selector "' . $arg1 . '" is not found.', $arg1);
			throw new \Behat\Mink\Exception\ExpectationException($message, $this->getSession());
		}
		$result->click();
	}
}
