<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <title>Header</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/header.css">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/index.css">
  
</head>
<body>
<header>
  <div class="container">
    <img src="https://lh4.googleusercontent.com/-ak28-E7WE_w/TX9JIJy4lBI/AAAAAAAALcY/4hPNBtNZk8U/s1600/sony_logo20.png" class="logo" alt="phonegeek"height="50px"width="50px">
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </nav>
  </div>
</header>
<div class="wrapper">

  <div class="login-form">
    
    <form action="includes/login.inc.php" method="post">
      <input type="text" name="mailuid" placeholder="Username/Email">
      <input type="password" name="pwd" placeholder="Password">
      <button type="submit" name="login-submit">LOGIN</button>
    </form>
  </div>
  <div class="logout-form">
           <form action="includes/logout.inc.php" method="post">
               <button type="submit" name="logout-submit">Logout</button>
                 <a id="signup" href="signup.php">Signup</a>
           </form>
     </div>

</div>
