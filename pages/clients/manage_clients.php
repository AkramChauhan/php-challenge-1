<?php
require($_SERVER['DOCUMENT_ROOT'].'/includes/config.php');
$db->check_login();

$table   = "clients";
$singular_table   = "Client";
$page  = "manage_clients.php";
$page_title = "Add Client";
$mode = "add";

if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
  $page = "manage_".$table.".php?mode=edit&id=".$_REQUEST['id'];
}
//Fields
$name = "";
$code = "";
$picture = "";
$city = "";

$cities = $db->get('cities');
if(isset($_REQUEST['submit'])){

  $name    = trim($_REQUEST['name']);  
  $code    = trim($_REQUEST['code']);  
  $city    = trim($_REQUEST['city']);  
  $mode = $_REQUEST['mode'];

  // Validation
  if(empty($name)){
    $_SESSION['error'] = "Name can't be empty.";
    $db->redirect(SITEURL.$table."/create");
  }
  if(empty($code)){
    $_SESSION['error'] = "Code can't be empty.";
    $db->redirect(SITEURL.$table."/create");
  }
  if(empty($city)){
    $_SESSION['error'] = "City can't be empty.";
    $db->redirect(SITEURL.$table."/create");
  }
  if(isset($_FILES['picture']) && !empty($_FILES['picture']['name'])){
    $picture = $_FILES['picture']['name'];
    $payload = $db->upload_image($_FILES);
    if($payload==0){
      $_SESSION['error'] = "Image upload failed.";
      // $db->redirect(SITEURL.$table."/create");
    }
  }

  if($mode=="add"){
    $rows   = array(
      "name",
      "code",
      "city",
      "picture",
    );
    $values = array(
      $name,
      $code,
      $city,
      $picture,
    );
    $record_id = $db->insert($table,$values,$rows);
    $_SESSION['success'] = "New ".$singular_table." Added.";
    $db->redirect(SITEURL.$table);
    
  }else if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
    
    $rows   = array(
      "name"=>$name,
      "code"=>$code,
      "city"=>$city,
    );
    if(isset($_FILES['picture']) && !empty($_FILES['picture']['name'])){
      $rows['picture'] = $_FILES['picture']['name'];
    }
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
    $code    = stripslashes($row['code']);
    $city    = stripslashes($row['city']);
    $picture    = stripslashes($row['picture']);
  }
}

if(isset($_REQUEST['id']) && $_REQUEST['id']>0 && $_REQUEST['mode']=="delete"){
  /*$where = " id='".$_REQUEST['id']."'";
  $db->mac_delete($ctable,$where);*/
  $where = "id = '".$_REQUEST['id']."'";
  $db->delete($table,$where);
  $_SESSION['success']= $singular_table." has been deleted.";
  $db->redirect("index.php");
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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   </head>
  <body class="sb-nav-fixed">
    <?php require(SITEROOT."includes/header.php"); ?>
    <main>
      <div class="container-fluid">
        <h3 class="mt-4"><?php echo $page_title; ?></h3><br />
          <form role="form" action="" method="post" enctype="multipart/form-data">
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
                      <input type="text" class="form-control" required name="name" placeholder="Enter Client Name" id="name" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group">
                      <label for="code">Code <code>*</code></label>
                      <input type="text" class="form-control" required name="code" placeholder="Enter Client code" id="code" value="<?php echo $code; ?>">
                    </div>
                    <div class="form-group">
                      <label for="city">City <code>*</code></label>
                      <select class="form-control change_city" required name="city">
                        <option value=""></option>
                        <?php
                        foreach($cities as $temp_city){ 
                          $selected = "";
                          if($city==$temp_city['id']){
                            $selected = "selected";
                          }
                          ?>
                          <option value="<?php echo $temp_city['id']; ?>" <?php echo $selected; ?> ><?php echo $temp_city['name'] ?></option>
                        <?php } ?>
                      </select>
                      <small id="cityHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label for="picture">Picture <code>*</code></label>
                      <?php
                        if(!empty($picture)){
                          ?>
                          <img style="width:80px;" src="<?php echo SITEURL.'pictures/'.$picture; ?>" alt="Image">
                          <?php
                        }
                      ?>
                      <input type="file" required accept="image/png, image/gif, image/jpeg" value="<?php echo $picture ?>" class="form-control" name="picture" id="picture">
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
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function(){
          $('.change_city').select2({
            placeholder: "Select City",
            allowClear: true,
          });
        });
     </script>
  </body>