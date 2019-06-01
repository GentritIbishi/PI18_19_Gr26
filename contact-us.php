<?php
require "header.php";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="CSS/contact-us.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

<div class="contact-section">

  <h1>Contact Us</h1>
  <div class="border"></div>
  <form class="contact-form" action="includes/contact-form.php" method="post">
    <input name="name" type="text" class="contact-form-text" placeholder="Your name">
    <input  name ="email" type="email" class="contact-form-text" placeholder="Your email">
    <input  name="phone" type="phone" class="contact-form-text" placeholder="Your phone">
    <textarea name="message" class="contact-form-text" placeholder="Your message"></textarea>
    <input type="submit" class="contact-form-btn" value="Send">
  </form>
</div>


<?php
require "footer.php";
?>

  </body>
</html>
