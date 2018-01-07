<?php
  include('connect.php');

  $portfolio = "SELECT p.project_name, d.description, i.images_name FROM tbl_project p, tbl_project_description pd, tbl_description d, tbl_images i, tbl_project_images pi WHERE p.project_id = pd.project_id AND d.description_id = pd.description_id AND p.project_id = pi.project_id AND i.images_id = pi.images_id"

  $getPortfolio = mysqli_query($link, $portfolio);

  echo $getPortfolio;
 ?>
