<?php
  include("includes/_config.php"); 
  $page_title = "Team";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("includes/head.php"); ?>
</head>

<body>
  <div class="hero-section">
  <?php include("includes/header.php"); ?>
    <h1>Our Team</h1>

    <div class="team">
      <div class="cards">

        <div class="card1">
          <div class="green"></div>
          <div class="content">
            <h3>Buttercup</h2>
            <p class="title">Designer</p>

          </div>
          <div class="icons">
            <i class="fab fa-pinterest"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-square"></i>
          </div>
        </div>
        
        <div class="card2">
          <div class="pink"></div>
          <div class="content">
            <h3>Blossom</h2>
            <p class="title">Founder</p>
          </div>
          <div class="icons">
            <i class="fab fa-pinterest"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-square"></i>
          </div>
        </div>

        <div class="card3">
          <div class="blue"></div>
          <div class="content">
            <h3>Bubbles</h2>
            <p class="title">Marketer</p>
          </div>

          <div class="icons">
            <i class="fab fa-pinterest"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-square"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  <?php include("includes/footer.php"); ?>
</html>