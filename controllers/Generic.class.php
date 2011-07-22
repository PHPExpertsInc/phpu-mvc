<?php

/** PHP University's MVC Project
  *   Part of the PHP University Code Collection
  *   http://www.phpu.cc/mvc/
  *
  * Copyright(c) 2011 Theodore R. Smith <theodore@phpexperts.pro>
  * License: Creative Commons Attribution License v3.0
  * http://creativecommons.org/licenses/by/3.0
 **/

class GenericController implements CommandI
{
	public function execute($action)
	{
		if ($action == '' || $action == ActionsList::SHOW_HOME)
		{
			require PHPUMVC_PATH . '/views/home.tpl.php';
		}
		else if ($action == ActionsList::SHOW_404)
		{
			header('HTTP/1.0 404 FILE NOT FOUND');
			require PHPUMVC_PATH . '/views/404.tpl.php';
		}

		return true;
	}
}
