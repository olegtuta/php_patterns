<?php

use Db\Database;
use Db\MySQLConfig;

$config = new MySQLConfig('localhost', 'my_db', 'my_user', 'my_password');
$db     = new Database($config);

$pdo = $db->connect();
