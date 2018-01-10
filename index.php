<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">

  <title>Lyndsay Fearnall</title>
</head>
<body>

<!--Header-->
<div id="home-background">
  <?php
    include "includes/header.php"
  ?>

<!--Home Section-->
  <?php
    include "includes/home.php"
  ?>
</div>
<!--About Section-->
  <?php
    include "includes/about.php"
  ?>

<!--Portfolio Section-->
  <?php
    include "includes/portfolio.php"
  ?>

<!--Contact Section-->
  <?php
    include "includes/contact.php"
   ?>

<!--Footer Section-->

  <footer>
    <div class="container">
      <p> &copy
        <?php echo date('Y'); ?>
        designed and developed by Lyndsay Fearnall
      </p>
    </div>
  </footer>

<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="js/main.js"></script>
<script src="js/navigation.js"></script>


</body>
</html>
