<?php

/** The Collabra Market Project
  *   Part of the Collabra Commercial Collaboration Platform
  *
  * Copyright(c) 2011 Theodore R. Smith <theodore@phpexperts.pro>
  * All rights reserved.
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

