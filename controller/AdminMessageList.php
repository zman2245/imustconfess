<?php
namespace controller;
use lib\api\Messages;

class AdminMessageList implements Controller
{
	/**
	 * (non-PHPdoc)
	 * @see Controller::run()
	 */
	public function run($result)
	{
		$api = new Messages();
		$result->messages = $api->getMessages(0, 10, true);
	}
}