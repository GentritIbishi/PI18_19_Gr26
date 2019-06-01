<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery-3.4.0.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/header.css">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/index.css">

</head>
<body>
        <header class="main-header">
                <div class="menu-toggle" id="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="overlay"></div>
                <div class="-header-container">
                    <nav class="head-nav">
                        <h1 class="brand"><a href="index.php">GEE<span>K</span>PHONE</a></h1>
                        <ul class="head-ul">
                            <li id="head-li"><a href="index.php">Home</a></li>
                            <li id="head-li"><a href="buynow.php">Buy Now</a></li>
                            <li id="head-li"><a href="Game1.html">Game</a></li>
                            <li id="head-li"><a href="about-us.php">About</a></li>
                            <li id="head-li"><a href="contact-us.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
        </header>




        <nav>
                <ul id="login-ul">
                  <li id="login">
                    <a id="login-trigger" href="#">
                      Log in <span>▼</span>
                    </a>
                    <div id="login-content">
                      <form action="includes/login.inc.php" method="post">
                        <fieldset id="inputs">
                          <input id="username" type="text" name="mailuid" placeholder="Your email address" required>
                          <input id="password" type="password" name="pwd" placeholder="Password" required>
                        </fieldset>
                        <fieldset id="actions">
                          <input type="submit" name="login-submit" id="submit" value="Log in">
                          <label><input type="checkbox" checked="checked"> Keep me signed in</label>
                        </fieldset>
                      </form>
                    </div>
                  </li>
                  <li id="signup">
                    <a href="signup.php">Sign up</a>
                  </li>
                </ul>

                <div class="logout-form">
           <form action="includes/logout.inc.php" method="post">
               <button type="submit" name="logout-submit">Log out</button>
           </form>
     </div>


</div>
<!--Navigation Bar javascript-->
<script>
var open = document.getElementById('hamburger');
var changeIcon = true;

open.addEventListener("click", function(){

    var overlay = document.querySelector('.overlay');
    var nav = document.querySelector('nav');
    var icon = document.querySelector('.menu-toggle i');

    overlay.classList.toggle("menu-open");
    nav.classList.toggle("menu-open");

    if (changeIcon) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");

        changeIcon = false;
    }
    else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
        changeIcon = true;
    }
});
</script>

<!--Drop down jquery-->
<script>
        $(document).ready(function(){
      $('#login-trigger').click(function(){
        $(this).next('#login-content').slideToggle();
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
          else $(this).find('span').html('&#x25BC;')
        })
    });
        </script>
