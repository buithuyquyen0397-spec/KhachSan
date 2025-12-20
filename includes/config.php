<?php

//define('DB_HOST', '127.0.0.1');  
//define('DB_USER', 'root');      
//define('DB_PASS', '');           
//define('DB_NAME', 'khachsan');   
//define('DB_PORT', '3306');       

define('DB_HOST', getenv('MYSQLHOST'));
define('DB_USER', getenv('MYSQLUSER'));
define('DB_PASS', getenv('MYSQLPASSWORD'));
define('DB_NAME', getenv('MYSQLDATABASE'));
define('DB_PORT', getenv('MYSQLPORT'));
?>
