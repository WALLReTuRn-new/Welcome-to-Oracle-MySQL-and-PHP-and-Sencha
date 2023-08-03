<?php
define('APPLICATION', 'App');
define('aplication', 'App');
define('APP', 'C:/xampp/htdocs/example/');
define('DIR_APPLICATION', APP.'app/');
define('DIR_SYSTEM', APP.'system/');
define('DIR_TEMPLATE', APP.'app/view/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_STORAGE', DIR_SYSTEM . '');
define('DIR_CACHE', DIR_STORAGE . 'cache/');


// DB OCI
//define('DB_DRIVER', 'oci');
//define('DB_HOSTNAME', 'localhost');
//define('DB_USERNAME', '');
//define('DB_PASSWORD', '');
//define('DB_DATABASE', 'localhost:1521/XE');
//define('DB_PORT', '3306');
//define('DB_PREFIX', '');

// DB MYSQL
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'basicsencha');
define('DB_PORT', '3306');
define('DB_PREFIX', '');
