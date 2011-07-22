<?php

/** The Collabra Market Project
  *   Part of the Collabra Commercial Collaboration Platform
  *
  * Copyright(c) 2011 Theodore R. Smith <theodore@phpexperts.pro>
  * All rights reserved.
 **/

class GreetingsManager
{
	const ERROR_INVALID_INPUT = 101;

	public function sayHi(Person $person)
	{
		$this->ensureSaneInputs($person);

		$greeting = "Hi, {$person->name}!";

		return $greeting;
	}

	protected function ensureSaneInputs(Person $person)
	{
		if (empty($person) || !is_string($person->name))
		{
			throw new InvalidArgumentException("The person's name is required and must be a string.", self::ERROR_INVALID_INPUT);
		}
	}
}

