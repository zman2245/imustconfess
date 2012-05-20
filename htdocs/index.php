<?php
require_once 'AutoLoader.php';
use controller\FrontController;

$smarty = new Smarty();

$smarty->template_dir 	= SMARTY_TEMPLATES_PATH;
$smarty->compile_dir 	= SMARTY_COMPILE_PATH;
$smarty->cache_dir 		= SMARTY_CACHE_PATH;
$smarty->config_dir 	= SMARTY_CONFIG_PATH;

try
{
	$fc = new FrontController();
	$fc->run($smarty);
} catch (\Exception $e)
{
	// some exception occurred, show the 500 page
	$smarty->display('500.tpl');
}