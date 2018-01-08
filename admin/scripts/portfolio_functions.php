<?php
include('connect.php');

  //create query
  $query = "SELECT * FROM tbl_projects";

  //get result
  $result = mysqli_query($link, $query);

  //fetch data
  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //print result
  echo json_encode($row);

  //close connection
  mysqli_close($link);

 ?>
