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
        <div class="card_image"><img src="https://picsum.photos/500/300/?image=10"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn card_btn">Read More</button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn card_btn">Read More</button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="https://picsum.photos/500/300/?image=11"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn card_btn">Read More</button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="https://picsum.photos/500/300/?image=14"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn card_btn">Read More</button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="https://picsum.photos/500/300/?image=17"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn card_btn">Read More</button>
        </div>
      </div>
    </li>
    <li class="kartelat_item">
      <div class="card">
        <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn card_btn">Read More</button>
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
