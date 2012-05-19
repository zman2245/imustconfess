<?php
namespace test;
require_once '/var/www/imustconfess/htdocs/AutoLoader.php';
use lib\api\Messages;

$api = new Messages();

$api->submitMessge("test2", 123456, "test title");

$msgs = $api->getMessages(1, 1, true);

foreach ($msgs as $msg)
{
	$api->insertMessage($msg->id);
}

$msgs = $api->getMessages(1, 1);

var_dump($msgs);

assert(count($msgs) > 0);
assert(array_shift($msgs)->body == "test2");
