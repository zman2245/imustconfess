<?php
namespace controller;

class MessageList implements Controller
{
	/**
	 * (non-PHPdoc)
	 * @see Controller::run()
	 */
	public function run($result)
	{
		$result->name = "Zack";
	}
}