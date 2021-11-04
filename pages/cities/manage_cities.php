<?php
require($_SERVER['DOCUMENT_ROOT'].'/includes/config.php');
$db->check_login();

$table   = "cities";
$singular_table   = "City";
$page  = "manage_cities.php";
$page_title = "Add City";
$mode = "add";

if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
  $page = "manage_".$table.".php?mode=edit&id=".$_REQUEST['id'];
}
//Fields
$name = "";

if(isset($_REQUEST['submit'])){
  $name    = trim($_REQUEST['name']);  
  $mode = $_REQUEST['mode'];

  // Validation
  if(empty($name)){
    $_SESSION['error'] = "Name can't be empty.";
    $db->redirect(SITEURL.$table."/create");
  }

  if($mode=="add"){    
    $rows   = array(
      "name",
    );
    $values = array(
      $name,
    );
    $record_id = $db->insert($table,$values,$rows);
    $_SESSION['success'] = "New ".$singular_table." Added.";
    $db->redirect(SITEURL.$table);
  }else if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
    $rows   = array(
      "name"=>$name,
    );
    $where  = "id='".$_REQUEST['id']."'";
    
    $db->update($table,$rows,$where);
    $_SESSION['success'] = $singular_table." has been updated.";
    $db->redirect(SITEURL.$table);
}}

if(isset($_REQUEST['id']) && $_REQUEST['id']>0 && $_REQUEST['mode']=="edit"){
  $mode="edit";
  $where = " id='".$_REQUEST['id']."'";
  $table_rows = $db->get($table,"*",$where);
  foreach($table_rows as $row){
    $name    = stripslashes($row['name']);
  }
}

if(isset($_REQUEST['id']) && $_REQUEST['id']>0 && $_REQUEST['mode']=="delete"){
  /*$where = " id='".$_REQUEST['id']."'";
  $db->mac_delete($ctable,$where);*/
  // Check if city exist in any client's details.
  $exist_city = $db->get_counts('clients','*',"city='".$_REQUEST['id']."'");
  if($exist_city==0){
    $where = "id = '".$_REQUEST['id']."'";
    $db->delete($table,$where);
    $_SESSION['success']= $singular_table." has been deleted.";
    $db->redirect(SITEURL.$table);
  }else{
    // $_SESSION['success']= $singular_table." can't be deleted because its associated with clients.";
    echo 2;
    return 2;
  }
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
                  <?php
                    if($mode=="edit"){ ?>
                    <input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
                    <?php }
                  ?>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Name <code>*</code></label>
                      <input type="text" class="form-control" required name="name" placeholder="Enter City Name" id="name" value="<?php echo $name; ?>">
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