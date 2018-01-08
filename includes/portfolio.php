<?php
  include('admin/scripts/portfolio_functions.php');

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
  <!-- <div class="container row">
    <div class="col s12">
      <h2>My <span class="title-bold">work</span></h2>
      <div class="title-underline"></div>
    </div>
  </div> -->

    <div class="col s12" id="project-con">
      <!--data goes here-->
    </div>

</section>
