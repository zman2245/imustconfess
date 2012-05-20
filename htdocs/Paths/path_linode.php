<?php
/**
 * DO NOT OVERWRITE DURING DEPLOYMENTS - Contains machine-specific path information
 * This file should be used to overwrite path.php (in this directory) when deploying to Linode
 */
define('CLASS_PATH','/home/zack/public/i-must-confess.com/public/');
define('SMARTY_PATH', '/usr/share/php/smarty');
define('SMARTY_TEMPLATES_PATH', '/home/zack/public/i-must-confess.com/public/assets/smarty/templates');
define('SMARTY_COMPILE_PATH', '/home/zack/public/i-must-confess.com/public/assets/smarty/templates_c');
define('SMARTY_CACHE_PATH', '/home/zack/public/i-must-confess.com/public/assets/smarty/cache');
define('SMARTY_CONFIG_PATH', '/home/zack/public/i-must-confess.com/public/assets/smarty/configs');