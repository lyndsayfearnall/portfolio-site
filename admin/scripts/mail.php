<?php

  function redirect_to($location){
    if($location != NULL){
      header("Location: {$location}");
      exit;
    }
  }
  //echo "From mail file.";
  function submitMessage($name, $email, $message) {
    //echo "From submitMessage()";
    $to = "me@lyndsayfearnall.com";
    $subject = "Message from user from hosting";
    $extra = "Reply to: " .$email;
    $msg = "Name: ".$name."\n\nEmail: ".$email."\n\nMessage: ".$message;
    mail($to, $subject, $msg, $extra); //only works with a live web server
    $direct = $direct."?name={$name}"; //adds personalization, makes people feel warm and fuzzy
  } //copy and paste funciton submitMessage from contact.php so that you get exactly what you've typed. Order matters
?>
