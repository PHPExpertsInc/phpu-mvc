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
require_once 'PHPUnit/Framework/TestCase.php';

class GenericControllerTest extends PHPUnit_Framework_TestCase
{
	/** @var GenericController **/
	private $controller;

	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp()
	{
		$this->controller = new GenericController;

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

	protected function grabPageHTML($page)
	{
		$filename = PHPUMVC_PATH . '/views/' . $page  . '.tpl.php';
		if (!file_exists($filename))
		{
			$this->assert(false, "Template file $page.tpl.php not found.");
		}

		ob_start();
		include $filename;
		$html = ob_get_clean();

		return $html;
	}

	public function testWillShowHomePage()
	{
		$homePageHTML = $this->grabPageHTML('home');
		$this->expectOutputString($homePageHTML);

		$this->controller->execute(ActionsList::SHOW_HOME);
	}

	public function testWillShow404PageOnDemand()
	{
		$errorPageHTML = $this->grabPageHTML('404');
		$this->expectOutputString($errorPageHTML);
	
		$this->controller->execute(ActionsList::SHOW_404);
	}
}

