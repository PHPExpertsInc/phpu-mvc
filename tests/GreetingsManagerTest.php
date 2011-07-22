<?php

/** The Collabra Market Project
  *   Part of the Collabra Commercial Collaboration Platform
  *
  * Copyright(c) 2011 Theodore R. Smith <theodore@phpexperts.pro>
  * All rights reserved.
 **/

require_once 'bootstrap.inc.php';
require_once 'PHPUnit/Framework/TestCase.php';

/**
* @covers GreetingsManager
*/
class GreetingsManagerTest extends PHPUnit_Framework_TestCase
{
	/** @var GreetingsManager **/
	private $greeter;

	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp()
	{
		$this->greeter = new GreetingsManager;
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

	public function testWillNotAcceptEmptyInput()
	{
		$person = new Person;
		try
		{
			$this->greeter->sayHi($person);
			$this->fail();
		}
		catch (InvalidArgumentException $e)
		{
			$this->assertEquals(GreetingsManager::ERROR_INVALID_INPUT, $e->getCode());
		}
	}

	public function testWillNotAcceptInvalidInput()
	{
		$person = new Person;
		$person->name = 1234;

		try
		{
			$this->greeter->sayHi($person);
			$this->fail();
		}
		catch (InvalidArgumentException $e)
		{
			$this->assertEquals(GreetingsManager::ERROR_INVALID_INPUT, $e->getCode());
		}
	}

	public function testWillSayHiCorrectly()
	{
		$person = new Person;
		$person->name = 'Sam';

		$expectedValue = 'Hi, Sam!';
		$this->assertEquals($expectedValue, $this->greeter->sayHi($person));
	}
}

