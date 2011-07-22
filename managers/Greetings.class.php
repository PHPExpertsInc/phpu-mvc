<?php

/** PHP University's MVC Project
  *   Part of the PHP University Code Collection
  *   http://www.phpu.cc/mvc/
  *
  * Copyright(c) 2011 Theodore R. Smith <theodore@phpexperts.pro>
  * License: Creative Commons Attribution License v3.0
  * http://creativecommons.org/licenses/by/3.0
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

