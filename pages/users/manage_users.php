<?php
require($_SERVER['DOCUMENT_ROOT'].'/includes/config.php');
$db->check_login();

$table   = "users";
$page  = "manage_users.php";
$page_title = "Add User";
$mode = "add";

if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
  $page = "manage_users.php?mode=edit&id=".$_REQUEST['id'];
}
//Fields
$name = "";
$username = "";
$uid = rand(11223344,99999999);

if(isset($_REQUEST['submit'])){
  $name    = trim($_REQUEST['name']);  
  $username    = trim($_REQUEST['username']);
  $uid    = trim($_REQUEST['uid']);
  $password   = md5(trim($_REQUEST['password']));
  $mode = $_REQUEST['mode'];

  // Validation
  if(empty($name)){
    $_SESSION['error'] = "Name can't be empty.";
    $db->redirect(SITEURL.$table."/create");
  }
  if(empty($username)){
    $_SESSION['error'] = "Username can't be empty.";
    $db->redirect(SITEURL.$table."/create");
  }
  if($_REQUEST['mode']=="add" && (empty($password) || strlen($_REQUEST['password'])<6)){
    $_SESSION['error'] = "Password must be 6 charactor long.";
    $db->redirect(SITEURL.$table."/create");
  }

  if($mode=="add"){    
    $rows   = array(
      "name",
      "username",
      "uid",
      "password",
    );
    $values = array(
      $name,
      $username,
      $uid,
      $password,
    );
    $user_id = $db->insert($table,$values,$rows);
    $_SESSION['success'] = "New User Added.";
    $db->redirect(SITEURL.$table);
  }else if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
    $rows   = array(
      "name"=>$name,
      "username" =>$username,
    );
    if(isset($_REQUEST['password']) && !empty($_REQUEST['password'])){
      $rows['password'] = md5($_REQUEST['password']);
    }
    $where  = "id='".$_REQUEST['id']."'";
    
    $db->update($table,$rows,$where);
    $_SESSION['success'] = "User has been updated.";
    $db->redirect(SITEURL.$table);
}}

if(isset($_REQUEST['id']) && $_REQUEST['id']>0 && $_REQUEST['mode']=="edit"){
  $mode="edit";
  $where = " id='".$_REQUEST['id']."'";
  $table_rows = $db->get($table,"*",$where);
  foreach($table_rows as $row){
    $name    = stripslashes($row['name']);
    $username    = stripslashes($row['username']);
    $uid    = stripslashes($row['uid']);
  }
}

if(isset($_REQUEST['id']) && $_REQUEST['id']>0 && $_REQUEST['mode']=="delete"){
  /*$where = " id='".$_REQUEST['id']."'";
  $db->mac_delete($ctable,$where);*/
  $where = "id = '".$_REQUEST['id']."'";
  $db->delete($table,$where);
  $_SESSION['success']="User has been deleted.";
  $db->redirect(SITEURL.$table);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo $page_title; ?> | <?php echo APPNAME; ?></title>
    <?php require(SITEROOT."includes/load_css.php"); ?>
   </head>
  <body class="sb-nav-fixed">
    <?php require(SITEROOT."includes/header.php"); ?>
    <main>
      <div class="container-fluid">
        <h3 class="mt-4"><?php echo $page_title; ?></h3><br />
          <form role="form" action="" method="post">
            <div class="row">
              <div class="col-md-12">
                <?php  if(isset($_SESSION['error'])){ ?>
                  <div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
                <?php 
                unset($_SESSION['error']);
                } ?>
                <?php  if(isset($_SESSION['success'])){ ?>
                  <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
                <?php 
                unset($_SESSION['success']);
                }
                ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card card-primary">
                  <input type="hidden" name="mode" id="mode" value="<?php echo $mode; ?>">
                  <input type="hidden" name="uid" id="uid" value="<?php echo $uid; ?>">
                  <?php
                    if($mode=="edit"){ ?>
                    <input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
                    <?php }
                  ?>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Name <code>*</code></label>
                      <input type="text" class="form-control" required name="name" placeholder="Enter Name" id="name" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group">
                      <label for="username">Username <code>*</code></label>
                      <input type="text" class="form-control" required name="username" placeholder="Enter Username" id="username" value="<?php echo $username; ?>">
                    </div>
                   <div class="form-group">
                      <label for="password">Password <code>*</code></label>
                      <input type="password" class="form-control" placeholder="Enter Strong Password" name="password" id="password">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
    </main>
     <?php require(SITEROOT."includes/footer.php"); ?> 
  </body>