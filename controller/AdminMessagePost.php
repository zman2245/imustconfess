<?php
namespace controller;
use lib\datamodel\sql\Confessions,
	lib\api\Messages;

/**
 * Handles confession submission
 * 
 * @author zack
 */
class AdminMessagePost implements Controller
{
	/**
	 * (non-PHPdoc)
	 * @see Controller::run()
	 */
	public function run($result)
	{
		// Handle posting of new confession
		// Note: Dao handles sql encoding
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$api = new Messages();
			$api->submitMessge($_POST['body'], $_SERVER['REMOTE_ADDR'], $_POST['author'], $_POST['title']);
			var_dump($_SERVER);
			var_dump("\n\n+++++++++++++++++\n\n");
			var_dump($_POST);
		}
	}
}