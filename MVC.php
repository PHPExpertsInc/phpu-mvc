<?php

/** PHP University's MVC Project
  *   Part of the PHP University Code Collection
  *   http://www.phpu.cc/mvc/
  *
  * Copyright(c) 2011 Theodore R. Smith <theodore@phpexperts.pro>
  * License: Creative Commons Attribution License v3.0
  * http://creativecommons.org/licenses/by/3.0
 **/
 
class PHPU_MVC
{
	private function __construct() { }
	public static function init()
	{
		spl_autoload_register(array(__CLASS__, 'includeFiles'));
		self::includeFiles();
	}
	
	// TODO: Implement a proper autoload function.
	public static function includeFiles()
	{
		if (defined('PHPUMVC_PATH'))
		{
			// It seems the library has already been initialized; bail.
			return;
		}

		define('PHPUMVC_PATH', dirname(__FILE__));

		include PHPUMVC_PATH . '/api/Command.interface.php';
		include PHPUMVC_PATH . '/api/View.interface.php';

		include PHPUMVC_PATH . '/models/ActionsList.datatype.php';
		include PHPUMVC_PATH . '/models/Person.datatype.php';

		include PHPUMVC_PATH . '/controllers/ControllerCommander.class.php';
		include PHPUMVC_PATH . '/controllers/Generic.class.php';
		include PHPUMVC_PATH . '/controllers/Greetings.class.php';

		include PHPUMVC_PATH . '/managers/Greetings.class.php';
	}
}

