<?php
  include('admin/scripts/connect.php');

  //create query
  $query = "SELECT * FROM tbl_projects";

  //get result
  $result = mysqli_query($link, $query);

  //fetch data
  $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free result
  mysqli_free_result($result);

  //close connection
  mysqli_close($link);
 ?>

<section id="portfolio">
  <div class="container row">
    <div class="col s12">
      <h2>My <span class="title-bold">work</span></h2>
    </div>
    <?php foreach($projects as $project) : ?>
      <div class="Well">
        <h3><?php echo $project['project_name']; ?></h3>
        <p><?php echo $project['project_description']; ?></p>
        <?php   $img1 = $project['project_image1'];?>
        <img src = "images/<?php echo $img1 ?>" alt="desktop version of site">
      </div>
    <?php endforeach ?>
  </div>
</section>
