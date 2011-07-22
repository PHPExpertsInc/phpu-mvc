<?php

/** PHP University's MVC Project
  *   Part of the PHP University Code Collection
  *   http://www.phpu.cc/mvc/
  *
  * Copyright(c) 2011 Theodore R. Smith <theodore@phpexperts.pro>
  * License: Creative Commons Attribution License v3.0
  * http://creativecommons.org/licenses/by/3.0
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

	public function testWillShowGreetingPage()
	{
		$greetingPageHTML = $this->grabPageHTML('greeting', array('greeting' => 'Hi, Sam!'));
		$this->expectOutputString($greetingPageHTML);

		$_POST = array('name' => 'Sam');
		$this->controller->execute(ActionsList::GREET);
	}
}

