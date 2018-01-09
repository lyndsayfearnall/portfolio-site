<?php
  // Set up connection credentials
  $user = "root";
  $pass = "root";
  $url = "localhost";
  $db = "db_lyndsay_portfolio";

  //access piece to get in and out of db
  $link = mysqli_connect($url, $user, $pass, $db);

  //check connection, send out error message
  if(mysqli_connect_errno()){
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
  }

?>
