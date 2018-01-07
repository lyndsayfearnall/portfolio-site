<?php
  require_once('admin/scripts/config.php');
//Message Vars
$msg = '';
$msgClass = ''; //add class to message, style with css

 if(filter_has_var(INPUT_POST, 'action')){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $street = $_POST['street'];
   $message = $_POST['message'];

//check for required fields and empty street input
  if(empty($street)){
  //Passed
    if(!empty($email) && !empty($name) && !empty($message)){
    //Passed
      //Validate Email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        //failed
        $msg = 'Please enter valid email address';
        $msgClass = 'incorrect';
      } else{
        //PASS GO, COLLECT $200
        $sendMail = submitMessage($name, $email, $message);
      }
    } else {
      $msg = 'Please fill in all fields';
      $msgClass = 'incorrect';
    }
  }
 }
 ?>

<section id="contact">
  <div class="container">
    <div class="row no-margin-bottom" id="contact-text">
      <div class="col s12">
        <h2>Say <span class="title-bold">Hello</span>
          <div class="title-underline"></div>
        </h2>
      </div>

      <div class="col s10 offset-s1">
        <p class="accent-text">Drop me a line, any time.</p>
        <p id="contact-p">Whether you're interested in working together, or if you just want to send me a funny video of your dog, I'd love to hear from you!</p>
      </div>
    </div>

<!--Form begins here-->
    <div class="row">
      <form class= "col s12" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php if($msg != ''): ?>
          <div class="row no-margin-bottom">
            <div class="col s10 offset-s1 <?php echo $msgClass; ?>">
              <?php echo $msg; ?>
            </div>
          </div>
        <?php endif; ?>
        <div class="row no-margin-bottom">
          <div class="input-field col s10 offset-s1" id="form-name">
            <input placeholder="Your Name" id="name" type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>"></input>
          </div>

          <div class="input-field col s10 offset-s1" id="form-email">
            <input placeholder="Your Email Address" id="email" type="email" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>"></input>
          </div>

          <div class="hidden">
            <label for="street">Street: </label><input id="street" type="text" name="street"></input>
          </div>

          <div class="input-field col s10 offset-s1" id="form-text">
            <textarea placeholder="Message" id="textarea1" class="materialize-textarea" name="message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
          </div>
          <div class="input-field col s6 offset-s3 center-align">
            <!--input type="submit" value="submit"-->
            <button class="btn waves-effect waves-light" type="submit" name="action" id="sumbit">Send
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
