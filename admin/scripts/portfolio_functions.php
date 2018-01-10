<?php
include('connect.php');

if (isset($_GET["allProjects"])){
  //create query
  $query = "SELECT * FROM tbl_projects";
  //get result
  $result = mysqli_query($link, $query);
  // fetch data
  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //print result
  echo json_encode($row);
  //close connection
  mysqli_close($link);
}

if (isset($_GET["project"])){
  //$project = $_GET["project"];

  $query = "SELECT * FROM tbl_projects WHERE project_id=1";

  $result = mysqli_query($link, $query);

  $row = mysqli_fetch_assoc($result);

  echo json_encode($row);

  mysqli_close($link);
}

 ?>
