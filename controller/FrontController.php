<?php
namespace controller;

/*
 * Main entry point for the site
 * 
 * @author zack
 */
class FrontController
{
	/**
	 * A mapping of paths to controllers
	 */
	private static $sitemap =
	array(
		"" 					=> "MessageList",
		"admin/submitted" 	=> "AdminMessageList",
	);
	
	/**
	 * A mapping of paths to templates
	 */
	private static $sitemapTpl =
	array(
		""					=> "index.tpl",
		"admin/submitted"	=> "index.tpl",
	);
	
	/*
	 * Main entry point
	 * 
	 * @params $smart  The template to show
	 */
	public function run($smarty)
	{
		$path = $_GET['path'];
		
		if (!array_key_exists($path, self::$sitemap))
		{
			$smarty->display('404.tpl');
			return;
		}

		$controllerName = self::$sitemap[$path];
		$template       = self::$sitemapTpl[$path];

		$class 		= "controller\\$controllerName";
		$controller = new $class;
		$results 	= new \stdClass();
		
		$controller->run($results);
		
		foreach ($results as $key=>$val)
		{
			$smarty->assign($key, $val);
		}

		$smarty->display($template);
	}
}

// Might have to put stuff down here?