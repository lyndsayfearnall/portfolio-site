<?php
  include('connect.php');

  // $portfolio = "SELECT p.project_name, d.description, i.images_name FROM tbl_project p, tbl_project_description pd, tbl_description d, tbl_images i, tbl_project_images pim WHERE p.project_id = pd.project_id AND d.description_id = pd.description_id AND p.project_id = pim.project_id AND i.images_id = pim.images_id"
  //
  // $getPortfolio = mysqli_query($link, $portfolio);

  //create query
  $query = "SELECT * FROM tbl_projects";

  //get result
  $result = mysqli_query($link, $query);

  //fetch data
  $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //var_dump($projects);

  //free result
  mysqli_free_result($result);

  //close connection
  mysqli_close($link);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <h1>Projects</h1>
    <?php foreach($projects as $post) : ?>
      <div class="Well">
        <h3><?php echo $post['project_name']; ?></h3>
        <p><?php echo $post['project_description']; ?></p>
        <?php echo $post['project_image1']; ?>
      </div>
    <?php endforeach ?>
  </body>
</html>
