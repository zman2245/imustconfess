<?php
require_once 'Paths/path.php';
require_once(SMARTY_PATH.'/Smarty.class.php');

function custom_autoload($className)
{
	require(CLASS_PATH.'/'.str_replace('\\','/',$className).'.php');
};

spl_autoload_register('custom_autoload');