<?php
require($_SERVER['DOCUMENT_ROOT'].'/includes/config.php');
$db->check_login();
$table   = "clients";

$table_where = "";
// Get the total number of rows in the table
if(isset($_REQUEST['string']) && $_REQUEST['string']!=""){
  $table_where .= " (name like '%".$_REQUEST['string']."%')";
  $_REQUEST['page_number'] =1;
}
$item_per_page =  ($_REQUEST["limit"] <> "" && is_numeric($_REQUEST["limit"]) ) ? intval($_REQUEST["limit"]) : 10;

if(isset($_REQUEST["page_number"]) && !empty($_REQUEST['page_number']) && $_REQUEST['page_number']!=1){
  $page_number = filter_var($_REQUEST["page_number"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
  if(!is_numeric($page_number)){
    die('Invalid page number!');} //incase of invalid page number
}else{
  $page_number = 1; //if there's no page number, set it to 1
}

$get_total_rows = $db->get_counts($table,"*",$table_where); //hold total records in variable
//break records into pages
$total_pages = ceil($get_total_rows/$item_per_page);

//get starting position to fetch the records
$page_position = (($page_number-1) * $item_per_page);

//$table_r = $db->mac_getrecords($table,"*",$table_where,"id DESC limit $page_position, $item_per_page",0,$conn);
$table_rr = $db->get($table,"*",$table_where,"id DESC limit $page_position, $item_per_page");
?>
<table id="example1" class="table table-sm table-hover mb-0">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Code</th>
            <th>City</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    if($table_rr->rowCount()>0){
        $count = 0;
        foreach($table_rr as $table_d){
            $count++;
            $city = $db->get_first('cities',"*","id='".$table_d['city']."'");
            $picture = SITEURL."dist/images/avatar.png";
            if($table_d['picture']!=null){
              $picture = SITEURL."pictures/".$table_d['picture'];
            }
        ?>
        <tr>
            <td><?php echo $count+$page_position; ?></td>
            <td>
              <img class="img img-responsive img-thumbnail" style="width:50px" src="<?php echo $picture ?>" alt="Image">
              <?php echo stripslashes($table_d['name']); ?></td>
            <td><?php echo stripslashes($table_d['code']); ?></td>
            <td><?php echo $city['name']; ?></td>
            <td>
            <a class="btn btn-info btn-sm" href="<?php echo SITEURL ?><?php echo $table ?>/<?php echo $table_d['id'] ?>/edit" title="Edit">Edit</a>
            <a data-id="<?php echo $table_d['id']; ?>" class="btn btn-danger delete_btn btn-sm" href="#" title="Delete">Delete</a>
            </td>
        </tr>
        <?php
        }
    }
    ?>
    </tbody>
</table>

<?php
if($get_total_rows>$item_per_page){
?>
<div class="pl-3 pt-3">
  <div class="paging_simple_numbers">
    <ul class="pagination">
      <?php 
        echo paginate_function($item_per_page, $page_number, $get_total_rows, $total_pages); 
    ?>
    </ul>
  </div>
</div>
<?php 
} 
?>
<?php
// Pagination Function
function paginate_function($item_per_page, $current_page, $total_records, $total_pages){
    $pagination = '';
    if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ //verify total pages and current page number
      $right_links  = $current_page + 3; 
      $previous    = $current_page - 3; //previous link 
      $next     = $current_page + 1; //next link
      $first_link  = true; //boolean var to decide our first link
      
      if($current_page > 1){
      $previous_link = ($previous<=0)?1:$previous;
        $pagination .= '<li class="page-item "><a class="paginate_link page-link"  href="#" aria-controls="datatable1" data-page="1" title="First">&laquo;</a></li>'; //first link
        $pagination .= '<li class="page-item "><a class="paginate_link page-link"  href="#" aria-controls="datatable1" data-page="'.$previous_link.'" title="Previous">&lt;</a></li>'; //previous link
          for($i = ($current_page-2); $i < $current_page; $i++){ //Create left-hand side links
            if($i > 0){
              $pagination .= '<li class="page-item "><a class="paginate_link page-link"  href="#" data-page="'.$i.'" aria-controls="datatable1" title="Page'.$i.'">'.$i.'</a></li>';
            }
          }   
        $first_link = false; //set first link to false
      }
      
      if($first_link){ //if current active page is first link
        $pagination .= '<li class="page-item active">
        <a class="paginate_link page-link" aria-controls="datatable1">'.$current_page.'</a></li>';
      }elseif($current_page == $total_pages){ //if it's the last active link
        $pagination .= '<li class="page-item active">
        <a class="paginate_link page-link" aria-controls="datatable1">'.$current_page.'</a></li>';
      }else{ //regular current link
        $pagination .= '<li class="page-item active">
        <a class="paginate_link page-link" aria-controls="datatable1">'.$current_page.'</a></li>';
      }
          
      for($i = $current_page+1; $i < $right_links ; $i++){ //create right-hand side links
        if($i<=$total_pages){
          $pagination .= '<li class="page-item "><a class="paginate_link page-link" href="#" aria-controls="datatable1" data-page="'.$i.'" title="Page '.$i.'">'.$i.'</a></li>';
        }
      }
      if($current_page < $total_pages){ 
      $next_link = ($i > $total_pages)? $total_pages : $i;
      $pagination .= '<li class="page-item "><a class="paginate_link page-link" href="#" aria-controls="datatable1" data-page="'.$next_link.'" title="Next">&gt;</a></li>'; //next link
      $pagination .= '<li class="page-item "><a class="paginate_link page-link" href="#" aria-controls="datatable1" data-page="'.$total_pages.'" title="Last">&raquo;</a></li>'; //last link
      }
    }
    return $pagination; //return pagination links
}
?>