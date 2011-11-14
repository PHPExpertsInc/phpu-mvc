<?php

/** PHP University's MVC Project
  *   Part of the PHP University Code Collection
  *   http://www.phpu.cc/mvc/
  *
  * Copyright(c) 2011 Theodore R. Smith <theodore@phpexperts.pro>
  * License: Creative Commons Attribution License v3.0
  * http://creativecommons.org/licenses/by/3.0
 **/

class GreetingsController implements CommandI
{
	/** @var GreetingsManager **/
	protected $greeter;

	public function __construct(GreetingsManager $greeter = null)
	{
		if (!$greeter)
		{
			$greeter = new GreetingsManager;
		}

		$this->greeter = $greeter;
	}

	public function execute($action)
	{
		if ($action == ActionsList::GREET)
		{
			ControllerCommander::$handledAction = true;
			$this->greet();
		}
	}

	protected function greet()
	{
		if (!isset($_POST['name'])) { throw new InvalidArgumentException('Name is required'); }

		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$person = new Person;
		$person->name = $name;

		$view = new stdClass;
		$view->greeting = $this->greeter->sayHi($person);

		require PHPUMVC_PATH . '/views/greeting.tpl.php';
	}
}

