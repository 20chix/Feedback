<?php


define('DB_NAME','w1530819_0');
define('DB_USER', 'w1530819');
define('DB_PASSWORD', 'Tvr60rEymLqV');
define('DB_HOST', 'elephant.ecs.westminster.ac.uk');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);


if(!$link){
	
	die ('could not connect'. mysql_error());
	
	
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!$db_selected){
	
	die('Can\'t use'. DB_NAME . ':' . mysql_error());
	
}

echo 'Connected successfully';


?>