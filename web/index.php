<?php

/** PHP University's MVC Project
  *   Part of the PHP University Code Collection
  *   http://www.phpu.cc/mvc/
  *
  * Copyright(c) 2011 Theodore R. Smith <theodore@phpexperts.pro>
  * License: Creative Commons Attribution License v3.0
  * http://creativecommons.org/licenses/by/3.0
 **/

// Front controller

session_start();

// 0. Initialize the Market library.
require_once realpath(dirname(__FILE__) . '/../MVC.php');
PHPU_MVC::init();

try
{
	$output = ControllerCommander::dispatch();
	echo $output;
}
catch (Exception $e)
{
	ControllerCommander::dispatch(ActionsList::SHOW_404);
}

