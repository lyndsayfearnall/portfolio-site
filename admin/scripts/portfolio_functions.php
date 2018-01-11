<?php
include('connect.php');

if (isset($_GET["allProjects"])){

    $query = "SELECT * FROM tbl_projects";

    //get result
    $result = mysqli_query($link, $query);

    //group results together
    $grpResult = "";
    echo "[";
    while($row = mysqli_fetch_assoc($result)){
      $jsonResult= json_encode($row);
      $grpResult .= $jsonResult.",";
    }

    echo substr($grpResult, 0, -1);
    echo "]";

    //close connection
    mysqli_close($link);
}

if (isset($_GET["project"])){
  $project = $_GET["project"];

  $query = "SELECT * FROM tbl_projects WHERE project_id = '$project'";

  $result = mysqli_query($link, $query);

  $row = mysqli_fetch_assoc($result);

  echo json_encode($row);

  mysqli_close($link);
}

 ?>
