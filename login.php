<?php
  include("includes/_config.php"); 
  $page_title = "Login";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("includes/head.php"); ?>
</head>

<body>
  <div class="hero-section">
    <?php include("includes/header.php"); ?>
  <div class="hero-text">  
    <h1>Login</h1>
    <div class="login">
      <form action="#">
        <fieldset>
          <legend>My Account</legend>
          <div>
          <label class="email"></label>
          <input type="email" required placeholder="Email" name="email" id="email">
         </div>
         <div>
          <label class="password"></label>
          <input type="password" required placeholder="Password" name="password" id="password">
        </div>
          <button type="submit">login</button>
        </fieldset>
      </form>
    </div>
    <a href="#top"><img class="bottom" src="assets/img/pinkbong.png" alt="Pink bong logo"></a>
  </div>
  </div>
   <?php include("includes/footer.php"); ?>
</html>