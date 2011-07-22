<?php

/** The Collabra Market Project
  *   Part of the Collabra Commercial Collaboration Platform
  *
  * Copyright(c) 2011 Theodore R. Smith <theodore@phpexperts.pro>
  * All rights reserved.
 **/

require_once 'bootstrap.inc.php';
require_once 'PHPUnit/Extensions/OutputTestCase.php';

class GreetingsControllerTest extends PHPUnit_Extensions_OutputTestCase
{
	/** @var GreetingsController **/
	private $controller;
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp()
	{
		$this->controller = new GreetingsController;

		parent::setUp();
	}

	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown()
	{
		parent::tearDown();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct()
	{
	}

	protected function grabPageHTML($page, $args)
	{
		$filename = PHPUMVC_PATH . '/views/' . $page  . '.tpl.php';
		if (!file_exists($filename))
		{
			$this->assert(false, "Template file $page.tpl.php not found.");
		}

		ob_start();
		$view = (object)$args;
		include $filename;
		$html = ob_get_clean();

		return $html;
	}

	/**
	 * @covers GreetingsController::execute
	 **/
	public function testWillShowGreetingPage()
	{
		$greetingPageHTML = $this->grabPageHTML('greeting', array('greeting' => 'Hi, Sam!'));
		$this->expectOutputString($greetingPageHTML);

		$_POST = array('name' => 'Sam');
		$this->controller->execute(ActionsList::GREET);
	}
}

