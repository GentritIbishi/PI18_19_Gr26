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
    <form>
        <div class="search-bar">
            <input type="text" placeholder="Search..">
            <input type="submit" value="Search">
        </div>
    </form>


</div>
</main>


<div class="main">
  <ul class="kartelat">
    <li class="kartelat_item">
      <div class="kartela">
        <div class="card_image"><img src="Pictures/sgs10plus.jpg" style="width:500px;height:300px;"></div>
        <div class="card_content">
          <h2 class="card_title">Samsung galaxy S10 Plus</h2>
          <p class="card_text">The phone that came out last week might be the best phone of 2019 already</p>
          <button class="btn card_btn"><a href="sgs10plus.php">Read More</a></button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="Pictures/mate20pro.jpg" style="width:500px;height:300px;"></div>
        <div class="card_content">
          <h2 class="card_title">Huawei Mate 20 Pro</h2>
          <p class="card_text">The latest installment of the Mate series is here and it looks promising</p>
          <button class="btn card_btn"><a href="mate20pro.php">Read More</a></button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="Pictures/LG_V30.jpg" style="width:500px;height:300px;"></div>
        <div class="card_content">
          <h2 class="card_title">LG V30</h2>
          <p class="card_text">The LG V30 is a very good looking phone, but does i hold up with it's competitors</p>
          <button class="btn card_btn"><a href="LGV30.php">Read More</a></button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="Pictures/matex.jpg" style="width:500px;height:300px;"></div>
        <div class="card_content">
          <h2 class="card_title">Huawei Mate x</h2>
          <p class="card_text">One of the first flexible phones in the market, it is a serious competitor to the samsung galaxy fold</p>
          <button class="btn card_btn"><a href="huaweiMatex.php">Read More</a></button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="Pictures/oneplus6t.jpg" style="width:500px;height:300px;"></div>
        <div class="card_content">
          <h2 class="card_title">Oneplus 6t</h2>
          <p class="card_text">Voted by MKBHD as the best phone of 2018, it packs a serious punch to the budget phone industry</p>
          <button class="btn card_btn"><a href="oneplus6t.php">Read More</a></button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="Pictures/sgsfold.jpg" style="width:500px;height:300px;"></div>
        <div class="card_content">
          <h2 class="card_title">Samsung Galaxy Fold</h2>
          <p class="card_text">The first foldable phone on the market is finally here!, and it's made by the phone giants samsung</p>
          <button class="btn card_btn"><a href="sgsfold.php">Read More</a></button>
        </div>
      </div>
    </li>
  </ul>
</div>

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
