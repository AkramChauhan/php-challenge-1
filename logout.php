<?php
require('includes/config.php');
$db->check_login();
session_destroy();
$db->redirect(SITEURL."user/login");
?>