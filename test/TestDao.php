<?php
namespace test;
require_once '/var/www/imustconfess/htdocs/AutoLoader.php';
use lib\Factory;

$ip = 999111222;

$dao    = Factory::dao('ConfessionsDao');
$struct = Factory::struct('Confessions');

$struct->id     = 1;
$struct->src_ip = $ip;
$struct->title  = "Test Title";
$struct->body   = "This is the body of the message";

$dao->insert($struct);

$entries = $dao->findBySrc_ip($ip);

assert(count($entries) > 0);

var_dump($dao, $entries);

foreach ($entries as $val)
{
	$dao->delete($val->id);
}

$entries = $dao->findBySrc_ip($ip);

assert(count($entries) == 0);