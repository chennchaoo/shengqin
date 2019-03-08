<?php
// database host
$db_host   = "localhost:3306";

// database name
$db_name   = "zgshengqin";

// database username
$db_user   = "zgshengqin";

// database password
$db_pass   = "K3B8w6U4";

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

define('API_TIME', '2016-07-16 11:17:09');

?>