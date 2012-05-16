<?php
require_once 'AutoLoader.php';

$smarty = new Smarty();

$smarty->template_dir 	= '../assets/smarty/templates';
$smarty->compile_dir 	= '../assets/smarty/templates_c';
$smarty->cache_dir 		= '../assets/smarty/cache';
$smarty->config_dir 	= '../assets/smarty/configs';

$smarty->assign('name', 'Ned');
$smarty->display('index.tpl');
