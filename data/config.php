<?php
// database host
$db_host   = "127.0.0.1";

// database name
$db_name   = "shengqin";

// database username
$db_user   = "root";

// database password
$db_pass   = "root";

// table prefix
$prefix    = "ecs_";

$timezone    = "PRC";

$cookie_path    = "/";

$cookie_domain    = "";

$session = "1440";

define('EC_CHARSET','utf-8');


if(!defined('ADMIN_PATH'))
{
define('ADMIN_PATH','admin');
}
if(!defined('ADMIN_PATH_M'))
{
define('ADMIN_PATH_M','admin');
}
define('AUTH_KEY', 'this is a key');

define('OLD_AUTH_KEY', '');

define('API_TIME', '2019-03-11 16:50:11');

?>