<?php
namespace controller;

/**
 * A controller!
 * 
 * @author zack
 */
interface Controller
{
	/**
	 * The main routine, invoked when this controller should be used
	 * @param mixed $arg  For the front controller, this is the smarty template, for
	 *                    other controllers this is the results to fill with data
	 */
	public function run($arg);
}