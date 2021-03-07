<?php
  $message_sent = false;
  if( isset($_POST['send']) ){
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      //submit the form
      $userEmail = $_POST['email'];
      $userSubject = $_POST['subject'];
      $userMessage = $_POST['message'];
      //where to send Email
      $to = 'dmennace@icloud.com';

      //whos it from
      $headers .= "From: " .$userEmail ."\r\n";


      mail($to, $userSubject, $userMessage, $headers);
      $message_sent = true;
      }
    }
 ?>

 <section id="contact">
   <?php
     if($message_sent):
    ?>
    <h3> Message sent.</h3>
   <?php  else:
     ?>
   <h1>Contact Me</h1>
   <div class="container">
   <form action="index.php" method="POST">
   <div class="form-group">
     <label for="email" class="form-label">Email</label>
     <input type="email" name="email" class="form-control" id="email" required placeholder="Johndoe@email.com">
   </div>
   <div class="form-group">
     <label for="subject" class="form-label">Subject</label>
     <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
   </div>
   <div class="form-group">
     <label for="message" class="form-label">Message</label>
     <textarea type="text" name="message" class="form-control" id="message" placeholder="Your message here." required></textarea>
   </div>
   <button type="submit" name="send" class="btn btn-primary">Send Message</button>
 </form>
 </div>
 <?php
 endif;
  ?>
   </section>
