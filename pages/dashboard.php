<?php
require('includes/config.php');
$db->check_login();

$clients_count =0;
$users_count =0;
$cities_count =0;

$clients_count = $db->get_counts('clients');
$users_count = $db->get_counts('users');
$cities_count = $db->get_counts('cities');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo APPNAME; ?></title>
        <?php require(SITEROOT."includes/load_css.php"); ?>
   </head>
    <body class="sb-nav-fixed">
      <?php require(SITEROOT."includes/header.php"); ?>
        <main>
          <div class="container-fluid">
            <h3 class="mt-4">Dashboard</h3>
            <hr />
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Clients
                          <div class="float-right"><h5><?php echo $clients_count; ?></h5></div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="<?php echo SITEURL ?>clients">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Users
                        <div class="float-right"><h5><?php echo $users_count; ?></h5></div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo SITEURL ?>users">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Cities
                        <div class="float-right"><h5><?php echo $cities_count; ?></h5></div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo SITEURL ?>cities">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </main>
      <?php require(SITEROOT."includes/footer.php"); ?> 
    </body>
</html>
