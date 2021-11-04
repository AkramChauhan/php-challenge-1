<?php
require($_SERVER['DOCUMENT_ROOT'].'/includes/config.php');
$db->check_login();

$table   = "clients";
$page     = "index";
$page_title = "Manage Clients";
$page_number = 1;
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
            <!-- Main content -->
            <section class="content">
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
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                          <input type="hidden" name="page_number" id="page_number" class="page_number" value="<?php echo $page_number; ?>">
                          <div class="input-group pr-2">
                              <input type="text" class="form-control search" name="search" id="search" placeholder="Search by Name">
                          </div>
                      </div>
                      <button class="btn btn-primary pl-2 search_data">Search</button>
                      <button class="btn btn-primary pl-2 reset_data">Reset</button>
                      <div class="float-right">
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Row</label>
                              </div>
                              <select class="custom-select change_row_limit" id="inputGroupSelect01">
                                  <option value="3">3</option>
                                  <option value="10">10</option>
                                  <option value="20">20</option>
                                  <option value="50">50</option>
                              </select>
                              <a class="btn btn-primary ml-2" href="<?php echo SITEURL ?><?php echo $table ?>/create">Add</a>
                            </div>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <div class="ajax_loader" style="display:none"><img src="<?php echo SITEURL ?>dist/images/ajax_loader.gif" alt="" style="margin-bottom: 10%;;margin-top:10%;padding-left:48%;" > </div>
                      <div class="load_data"></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </main>
      <?php require(SITEROOT."includes/footer.php"); ?> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  function load_data(){
      $(".load_data").html('');
      $(".ajax_loader").show();

      var limit = $(".change_row_limit option:selected").val();
      var page_number = $(".page_number").val();
      var string =  $(".search").val();

      $.ajax({
          type: 'GET',
          url: '<?php echo SITEURL ?>pages/<?php echo $table ?>/ajax_get_<?php echo $table ?>.php',
          data: {
              page_number: page_number, 
              string:string, 
              limit:limit
          },
          success: function (html) {
              $(".ajax_loader").hide();
              $(".load_data").html(html);
              // perform pagination.
              $(".page-link").click(function(e){
                  e.preventDefault();
                  page_number = $(this).attr('data-page');
                  $(".page_number").val(page_number);
                  load_data();
              });

              //Delete Item
              $(".delete_btn").click(function(e){
                  e.preventDefault();
                  var data_id = $(this).attr('data-id');
                  // var data_status = $(this).attr('data-status');
                  var status_msg = "It will be deleted from the system!";
                  swal({
                    title: "Are you sure?",
                    text: status_msg,
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                    $.ajax({
                      type: 'POST',
                      url: '<?php echo SITEURL ?>pages/<?php echo $table ?>/manage_<?php echo $table ?>.php',
                      data: {
                          mode: 'delete', 
                          id: data_id,
                      },
                      success: function (resp) {
                        var res_msg= "Item has been deleted successfully.";                                
                        swal(res_msg, {
                          icon: "success",
                        }).then(function(){
                          location.reload();
                        });
                      },
                    });
                  }
                  });
              });
          },
      });
  }
  $(document).ready(function(){
      $(".bulk_select_btn").hide();
      // $(".restore_selected_button").hide();
      load_data();
      $(".change_row_limit").change(function(){
          load_data();
      });
      $(".search_data").click(function(e){
          e.preventDefault();
          load_data();
      });
      $(".reset_data").click(function(e){
          e.preventDefault();
          $(".search").val('');
          load_data();
      });
  });
</script>
</body>
</html>
