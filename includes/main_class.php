<?php
class database {
  public $conn;
  function __construct() {
    $this->conn = $this->connect();
  }
  function connect(){
    $servername = HOST;
    $username = USERNAME;
    $password = PASSWORD;
    $database= DATABASE;
    
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    }
    catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
    }
  }
  function get($table, $rows = '*', $where = null, $order = null,$die=0){
    $results = array();
        $q = 'SELECT '.$rows.' FROM '.$table;
        if($where != null)
            $q .= ' WHERE '.$where;
        if($order != null)
            $q .= ' ORDER BY '.$order;
    if($die==1){ echo $q;die; }
    
    $result = $this->conn->query($q);
    return $result;
    
  }
  function get_first($table, $rows = '*', $where = null, $order = null,$die=0){
    $results = array();
        $q = 'SELECT '.$rows.' FROM '.$table;
        if($where != null)
            $q .= ' WHERE '.$where;
        if($order != null)
            $q .= ' ORDER BY '.$order;
            $q.= ' LIMIT 1';
    if($die==1){ echo $q;die; }
    
    $result = $this->conn->query($q)->fetch();
    return $result;
    
  }
  function insert($table,$values,$rows = 0,$die=0){
    // mac_insert - Insert and Die Values By Akram Chauhan
      $insert = 'INSERT INTO '.$table;
      if(count($rows) > 0){
          $insert .= ' ('.implode(",",$rows).')';
      }
      for($i = 0; $i < count($values); $i++){
        if(is_string($values[$i]))
          $values[$i] = '"'.$values[$i].'"';
      }
      $values = implode(',',$values);
      $insert .= ' VALUES ('.$values.')';
      if($die==1){
        echo $insert;die;
      }
      $this->conn->exec($insert);
  }
  function get_counts($table, $rows = '*', $where = null, $order = null,$die=0){
    $results = array();
        $q = 'SELECT '.$rows.' FROM '.$table;
        if($where != null)
            $q .= ' WHERE '.$where;
        if($order != null)
            $q .= ' ORDER BY '.$order;
     if($die==1){ echo $q;die; }
    
      $result = $this->conn->query($q);
      return count($result->fetchall());
  }
  function update($table,$rows,$where,$die=0){
    $update = 'UPDATE '.$table.' SET ';
    $keys = array_keys($rows);
    for($i = 0; $i < count($rows); $i++)
    {
        if(is_string($rows[$keys[$i]]))
        {
            $update .= $keys[$i].'="'.$rows[$keys[$i]].'"';
        }
        else
        {
            $update .= $keys[$i].'='.$rows[$keys[$i]];
        }
         
        // Parse to add commas
        if($i != count($rows)-1)
        {
            $update .= ',';
        }
    }
    $update .= ' WHERE '.$where;
    if($die==1){
      echo $update;die;
    }
    
    //$update = trim($update," AND");
    $result  = $this->conn->query($update);
    if($result)
    {
        return true;
    }
    else
    {
        return false;
    }
  }
  function delete($table,$where = null,$die=0){
    if($where=='' || $where==null || empty($where) || !isset($where)){ echo $q; die; }
      $results = array();
        $q = 'DELETE FROM '.$table;
      if($where != null)
            $q .= ' WHERE '.$where;
      if($die==1){ echo $q;die; }
      $result = $this->conn->query($q);
      return 1;
  }
  function check_login(){
    $logged_user = "";
    if(isset($_SESSION['AUTH_USER_ID'])){
      // dd($_SESSION,1);
      $where = "id = '".$_SESSION['AUTH_USER_ID']."'";
      $logged_user =  $this->get_first('users','*',$where);
    }else{
      $this->redirect(SITEURL."user/login");
    }
    return $logged_user;
  }
  function redirect($redirectPageName=null){
    if($redirectPageName==null){
      header("Location:".$this->SITEURL);
      exit;
    }else{
      header("Location:".$redirectPageName);
      exit;
    }
  } 
  function upload_image($file){
    $target_dir = SITEROOT."pictures/";
    $target_file = $target_dir . basename($file["picture"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($file["picture"]["tmp_name"]);
    if($check !== false) {
      $uploadOk = 1;
      if (move_uploaded_file($file["picture"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $file["picture"]["name"])). " has been uploaded.";
      }else{
        $uploadOk = 0;
      }
    } else {
      $uploadOk = 0;
    }
    return $uploadOk;
  }
}

// Global Functions
function dd($data, $die=0){
  echo '<div style="background-color:#333; font-size:18; padding:15px; color:#fff">';
  if(is_array($data)){
    print_r(json_encode($data));
  }else{
    echo $data;
  }
  echo '</div>';
  if($die==1){
    die;
  }
  return null;
}

$db = new database();
$conn = $db->connect();
?>