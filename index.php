<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">

  <title>Lyndsay Fearnall</title>
</head>
<body>

<!--Home Section-->
  <?php
    include "includes/home.php"
  ?>

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

  <footer class="footer-copyright">
    <div class="container">
      <p> &copy
        <?php echo date('Y'); ?>
        designed and developed by Lyndsay Fearnall
      </p>
    </div>
  </footer>

<!-- <script src="js/main.js"></script> -->
<script src="node_modules/materialize-css/dist/js/materialize.js"></script>

</body>
</html>
