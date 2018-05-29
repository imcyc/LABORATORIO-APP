<?php
define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "appimcyc"); // set database user
define ("DB_PASS","1pp3mcyc@"); // set database password
define ("DB_NAME","app"); // set database name
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
mysql_query("set names 'utf8'");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");
?>