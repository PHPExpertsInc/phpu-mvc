<?php
ob_start();
require_once realpath(dirname(__FILE__) . '/../MVC.php');
PHPU_MVC::init();

function grabPageHTML($page)
{
	$filename = PHPUMVC_PATH . '/views/' . $page  . '.tpl.php';
	if (!file_exists($filename))
	{
		$this->assert(false, "Template file $page.tpl.php not found.");
	}

	ob_start();
	include $filename;
	$html = ob_get_clean();

	return $html;
}

