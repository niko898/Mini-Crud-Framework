<?php

define('HTTP_SERVER', 'http://route-crud/');

$dir = dirname(__DIR__);
define('DIR_APPLICATION', $dir);
define('DIR_TEMPLATE', DIR_APPLICATION . '/src/view/templates');

define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'crud');
define('DB_PORT', '3306');
define('DB_PREFIX', 'crud_');