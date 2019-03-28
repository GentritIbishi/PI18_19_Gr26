

<link rel="stylesheet" type="text/css" href="CSS/signup.css"> 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<main>
<form action="includes/signup.inc.php" method="post">
<div class="sign-up">
            <img src="Pictures/avatar.png">
            <h1>Sign Up</h1>
            <form>
                <input type="text" name="uid" class="input-box" placeholder="Username">
                <input type="text" name="email" class="input-box" placeholder="E-mail">
                <br>
                <input type="password" name="pwd" class="input-box" placeholder="Password">
                <input type="password" name="pwd-repeat" class="input-box" placeholder="Repeat Password">
                <p><span><input type="checkbox"></span>I agree the terms of service</p>
                <button type="submit" name="signup-submit">Sign Up</button>
                <hr>
                <p class="or">OR</p>
                <button type="button" class="google-btn">Login with Google <i class="fab fa-google"></i> </button>
                <p>Do you have an account ? <a href="login.html">Log in</a> </p>
            </form>
        </div>

</form>
