<?php
require "header.php";
include 'includes/sdbh.php';
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<script src="https://use.fontawesome.com/ea603c10d8.js"></script>
<script src="https://use.fontawesome.com/ea603c10d8.js"></script>
<link rel="stylesheet" href="CSS/index.css">
<link rel="stylesheet" href="CSS/search.css">
<link rel="stylesheet" href="JS/index.js">
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
    <form action="includes/search-code.php" method="POST">
        <div class="search-bar">
            <input type="text" name="search" placeholder="Search..">
            <input type="submit" name="submit-search" value="Search">
        </div>
    </form>

</div>
</main>
<!--social bar-->
<div class="vertical-social-bar">
	<a href="#">
		<div class="social-bar__item social-bar__fb">
			<i class="fab fa-facebook-f"  aria-hidden="true"></i>
		</div>
	</a>

	<a href="#">
		<div class="social-bar__item social-bar__twitter">
			<i class="fab fa-linkedin-in"aria-hidden="true"></i>
		</div>
	</a>

	<a href="#">
		<div class="social-bar__item social-bar__linkedin">
			<i class="fab fa-twitter"aria-hidden="true"></i>
		</div>
	</a>

	<a href="#">
		<div class="social-bar__item social-bar__instagram">
		 	<i class="fab fa-instagram" aria-hidden="true"></i>
		</div>
	</a>
</div>
<!------------------------Sidebar-------------->
<div class="sidenav">
  <a href="#about">Phone Picture</a>
  <a href="#services">Text (link)</a>
  <a href="#clients">Phone Picture</a>
  <a href="#contact">Text (link)</a>
</div>


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
        <div class="card_image"><img src="Pictures/mate20pro.png" style="width:500px;height:300px;"></div>
        <div class="card_content">
          <h2 class="card_title">Huawei Mate 20 Pro</h2>
          <p class="card_text">The latest installment of the Mate series is here and it looks promising</p>
          <button class="btn card_btn"><a href="mate20pro.php">Read More</a></button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="Pictures/LG_V30.png" style="width:500px;height:300px;"></div>
        <div class="card_content">
          <h2 class="card_title">LG V30</h2>
          <p class="card_text">The LG V30 is a very good looking phone, but does i hold up with it's competitors</p>
          <button class="btn card_btn"><a href="LGV30.php">Read More</a></button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="Pictures/matex.png" style="width:500px;height:300px;"></div>
        <div class="card_content">
          <h2 class="card_title">Huawei Mate x</h2>
          <p class="card_text">One of the first flexible phones in the market, it is a serious competitor to the samsung galaxy fold</p>
          <button class="btn card_btn"><a href="huaweiMatex.php">Read More</a></button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="Pictures/oneplus6t.png" style="width:500px;height:300px;"></div>
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
    <li class="kartelat_item">
      <div class="kartela">
        <div class="card_image"><img src="Pictures/oppo-k3.png" style="width:500px;height:300px;"></div>
        <div class="card_content">
          <h2 class="card_title">Oppo K3</h2>
          <p class="card_text">Oppo K3 brings full-screen display and SD710 for 230$</p>
          <button class="btn card_btn"><a href="oppo-k3.php">Read More</a></button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="Pictures/lenovo-z6-youth.png" style="width:500px;height:300px;"></div>
        <div class="card_content">
          <h2 class="card_title">Lenovo Z6 Youth</h2>
          <p class="card_text">Lenovo Z6 Youth Edition debuts with Snapdragon 710</p>
          <button class="btn card_btn"><a href="lenovo-z6-youth.php">Read More</a></button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="Pictures/honor-20(1).png" style="width:500px;height:300px;"></div>
        <div class="card_content">
          <h2 class="card_title">Honor 20</h2>
          <p class="card_text">Honor 20 brings the latest specifications for just 350$</p>
          <button class="btn card_btn"><a href="honor-20.php">Read More</a></button>
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
<h1>Articles: Kjo de te Ndreqet ne fund</h1>
<!--**************code per search engine***************************-->
<div class="article-container">
        <?php
            $sql = "SELECT * FROM article";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

            if ($queryResults > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='article-box'>
                        <h3>".$row['a_title']."</h3>
                        <p>".$row['a_text']."</p>
                        <p>".$row['a_date']."</p>
                        <p>".$row['a_autori']."</p>
                    </div>";
                }
            }
        ?>

    </div>
<?php
require "footer.php";
?>
