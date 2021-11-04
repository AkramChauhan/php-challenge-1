<?php
require($_SERVER['DOCUMENT_ROOT'].'/includes/config.php');

if(isset($_REQUEST['username']) && $_REQUEST['password']){
  $where = " username='".$_REQUEST['username']."' and password='".md5($_REQUEST['password'])."' ";
  $res = $db->get_counts("users","*",$where);
	if($res>0){
    $res = $db->get("users","*",$where);
    foreach($res as $response){
      $_SESSION['AUTH_USER_ID'] = $response['id'];
      $_SESSION['AUTH_USER_UID']  = $response['uid'];
      $_SESSION['AUTH_USER_USERNAME'] = $response['username'];
      $_SESSION['AUTH_USER_NAME'] = $response['name'];
    }

    if(isset($_REQUEST['from']) && $_REQUEST['from']!=""){
      $db->redirect($_REQUEST['from']);
    }else{
      $db->redirect("/");
    }		
	}
	else{
    $message = "Seems like username or password is wrong.";
    $_SESSION['error'] = $message;
    $db->redirect(SITEURL."user/login");
  }
}else{
  $message = "Seems like username or password is wrong.";
  $_SESSION['error'] = $message;
  $db->redirect(SITEURL."user/login");
}
