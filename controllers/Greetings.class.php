<?php

/** The Collabra Market Project
  *   Part of the Collabra Commercial Collaboration Platform
  *
  * Copyright(c) 2011 Theodore R. Smith <theodore@phpexperts.pro>
  * All rights reserved.
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
			$this->greet();
		}

		return true;
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

