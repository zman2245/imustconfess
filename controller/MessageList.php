<?php
namespace controller;
use lib\datamodel\sql\Confessions;

class MessageList implements Controller
{
	/**
	 * (non-PHPdoc)
	 * @see Controller::run()
	 */
	public function run($result)
	{
		$messages = array();
		
		for ($i = 0; $i < 10; $i++)
		{
			$m = new Confessions;
			$m->body = "Hello there: $i";
			$m->id   = $i;
			$m->src_ip = "3.3.3.3";
			$m->timestamp = time();
			$m->title = "Test title";
			
			$messages[] = $m;
		}
		
		$result->messages = $messages;
	}
}