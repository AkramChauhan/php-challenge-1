<?php
// App configs
define("APPNAME","Serempre");
define("SITEURL","http://dev.serempretest.ai/");
define("SITEROOT","C:/xampp/htdocs/serempre/project/");

// Database configs
define("HOST","localhost");
define("USERNAME","root");
define("PASSWORD","database_pass");
define("DATABASE","database_name");

// Initial settings
ini_set('memory_limit', '-1');
set_time_limit(0);
error_reporting(E_ALL);
session_start();

?>