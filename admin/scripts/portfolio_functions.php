<?php
include('connect.php');

  if (isset($_GET["project"])){
    $project = $_GET["project"];

    $query = "SELECT * FROM tbl_projects WHERE project_id = '$project'";

    $result = mysqli_query($link, $query);

    $row = mysqli_fetch_assoc($result);

    echo json_encode($row);

    mysqli_close($link);

  } else {
      $query = "SELECT * FROM tbl_projects";

      //get result
      $result = mysqli_query($link, $query);

      //group results together
      $grpResult .= "[";

      while($row = mysqli_fetch_assoc($result)){
        $grpResult .= json_encode($row).',';
      }

      $grpResult .= "]";
      $finalResult = substr($grpResult, 0, -2).']';
      echo $finalResult;
  }

 ?>
