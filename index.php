<?php
include( "includes/init.php" );

$current_page_id = "index";
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Work</title>
</head>

<body>
  <?php include("includes/header.php");?>

  <div class = "parent">
    <!-- Image source: https://www.crunchbase.com/organization/swaggle -->
    <img class = "resize" src = "images/venmo_logo.png" alt = "Venmo Logo">
    <div class = "child2">
      <p class = "align"> I redesigned Venmo, incorporating a group bill-splitting service in the app. </p>
      <a href = "https://medium.com/@kathywang_72179/introdpd-pre-test-kw496-kathy-wang-5fa3c87e1eb8">
        View Case Study </a>
    </div>
  </div>

  <div class = "parent">
    <!-- Image source: http://brand.venmo.com/styleguide -->
    <img class = "resize" src = "images/swaggle_logo.png" alt = "Swaggle Logo">
    <div class = "child2">
      <p class = "align"> I interned at Swaggle, a DC-based startup. I conducted user validation
      testing, and identified design flaws to prepare for soft launch. </p>
      <p> Case Study Coming Soon! </p>
    </div>
  </div>

  <div class = "parent">
    <!-- Image source: https://twitter.com/wichacks -->
    <img class = "resize" src = "images/WiCHacks_logo.jpg" alt = "WiCHacks Logo">
    <div class = "child2">
      <p class = "align"> I participated in my first hackathon, in which I designed a
      website that simulated a collaborative design process for kids. My goal
      was to bridge the gap between art and technology, and get girls immersed in technology
      at a young age. </p>
      <p> Case Study Coming Soon! </p>
    </div>
  </div>
  
  <?php
  include( "includes/footer.php" );
   ?>
</body>


</html>
