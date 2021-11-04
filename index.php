<?php
$request = $_SERVER['REQUEST_URI'];
$request = rtrim($request, "/");

$data = explode("/",$request);
$data = array_filter($data);
$data = array_values($data);

switch ($request) {
  case '' :
      require __DIR__. '/pages/dashboard.php';
      break;
  case '/user/login' :
      require __DIR__. '/login.php';
      break;

  case '/clients' :
    require __DIR__. '/pages/clients/index.php';
    break;
  case '/clients/create' :
    require __DIR__. '/pages/clients/manage_clients.php';
    break;  

  case '/users' :
    require __DIR__. '/pages/users/index.php';
    break;
  case '/users/create' :
    require __DIR__. '/pages/users/manage_users.php';
    break;
  
  case '/cities' :
    require __DIR__. '/pages/cities/index.php';
    break;
  case '/cities/create' :
    require __DIR__. '/pages/cities/manage_cities.php';
    break;

  // For Edit
  case (in_array("cities",$data) && in_array("edit",$data)):
    $id = $data[1];
    $_REQUEST['id']=$id;
    $_REQUEST['mode']='edit';
    require __DIR__. '/pages/cities/manage_cities.php';
    break;
  case (in_array("clients",$data) && in_array("edit",$data)):
    $id = $data[1];
    $_REQUEST['id']=$id;
    $_REQUEST['mode']='edit';
    require __DIR__. '/pages/clients/manage_clients.php';
    break;
  case (in_array("users",$data) && in_array("edit",$data)):
    $id = $data[1];
    $_REQUEST['id']=$id;
    $_REQUEST['mode']='edit';
    require __DIR__. '/pages/users/manage_users.php';
    break;
    

  case '/logout' :
    require __DIR__. '/logout.php';
    break;
  default:
    http_response_code(404);
    require __DIR__. '/404.php';
    break;
}
?>