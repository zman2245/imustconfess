<?php
namespace lib\api;
use lib\Factory;

/**
 * A class for manipulating messages
 * 
 * @author zack
 */
class Messages
{
	/**
	 * Retrieve messages
	 * 
	 * @param $offest      Offset of message to retrieve
	 * @param $limit       The number of messages to fetch, starting at the offset
	 * @param $submissions If true, fetch curated messages, otherwise fetch non-curated messages
	 * 
	 * @return An array of Confessions
	 */
	public function getMessages($offset, $limit, $submissions = false)
	{
		$dao = $submissions ? Factory::dao("ConfessionsSubmittedDao") : Factory::dao("ConfessionsDao");
		$msgs = $dao->findAll(null, $offset, $limit);

		return $msgs;
	}
	
	/**
	 * Mark a message as fit for viewing
	 * 
	 * @param $id  The id of the message in the ConfessionsSubmitted table
	 */
	public function insertMessage($id)
	{
		// Move the entry from the submitted table to the legit table
		$daoFin = Factory::dao("ConfessionsDao");
		$daoSub = Factory::dao("ConfessionsSubmittedDao");
		$msg    = $dao->load($id);

		$daoFin->insert($msg);
		$dao->Sub->delete($id);
	}
	
	/**
	 * Submit message for curation
	 * 
	 * @param $body    The main text of the message
	 * @param $src_ip  The author's source IP
	 * @param $author  Optional author of the message
	 * @param $title   The title of the message
	 */
	public function submitMessge($body, $src_ip = null, $author = null, $title = null)
	{
		$dao = Factory::dao("ConfessionsSubmittedDao");
		$msg = Factory::struct("ConfessionsSubmitted");
		
		$msg->body 		= $body;
		$msg->author    = $author;
		$msg->src_ip 	= $src_ip;
		$msg->title 	= $title;
		$msg->timestamp = time();
		
		$dao->insert($msg);
	}
}