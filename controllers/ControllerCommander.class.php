<?php

/** PHP University's MVC Project
  *   Part of the PHP University Code Collection
  *   http://www.phpu.cc/mvc/
  *
  * Copyright(c) 2011 Theodore R. Smith <theodore@phpexperts.pro>
  * License: Creative Commons Attribution License v3.0
  * http://creativecommons.org/licenses/by/3.0
 **/

class ControllerException extends LogicException
{
	const INVALID_ACTION     = 601;
	const INVALID_USER_INPUT = 602;
}

class ControllerCommander
{
	// @codeCoverageIgnoreStart
	private function __construct() { }
	public static $actionExecuted = false;
	// @codeCoverageIgnoreStop

	protected static function fetchAction()
	{
		$action = filter_var($_GET['action'], FILTER_SANITIZE_STRING);

		// I want to make the default action to show the home page...
		if (empty($action))
		{
			// By having an actionslist class, I can avoid the dreaded
			// "Magic Constant". E.g. instead of having to worry about whether it's
			// "home", "index", "showHome",etc, i just rely on ActionList.
			$action = ActionsList::SHOW_HOME;
		}
		elseif (!is_string($action))
		{
			throw new ControllerException("Invalid action", ControllerException::INVALID_ACTION);
		}

		return $action;
	}

	/** Dispatches actions out to the controllers and returns the output, if any.
	  * @return string Output from the Views.
	 **/
	public static function dispatch($action = null)
	{
		$action = ($action !== null) ? $action : self::fetchAction();
		
		$controllers = array('GreetingsController', 'GenericController');
		$output = '';
		self::$actionExecuted = false;
		foreach ($controllers as $c)
		{
			$controller = new $c;
			$controller->execute($action);
		}

		if (self::$actionExecuted === false)
		{
			throw new ControllerException('No implementation found for ' . $action, ControllerException::INVALID_ACTION);
		}
	}
}


