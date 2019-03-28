<?php
require "header.php";
?>

<main>

<div id="log-p">
    <?php
    if (isset($_SESSION['userId'])) {
       echo  '<p>You are logged in</p>';
    }
    else {
        echo '<p>You are logged out</p>';
    }

     ?> 
</div>
<div class="showcase">



</div>
</main>
<style>

main p{
    text-align:center;
    font-size:18px;
   
}

.showcase {
margin:0;
padding:0;
background: url('Pictures/main-image.jpg') ;
width:100%;
height:120vh;


}
</style>


<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
require "footer.php";
?>