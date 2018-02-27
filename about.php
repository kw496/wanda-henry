<?php
include( "includes/init.php" );

$current_page_id = "about";
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>About</title>
</head>

<body>
  <?php include("includes/header.php");?>
  <div class = "aboutchild1">
    <!-- Image source: personal photography -->
    <img class = "personality_pic_resize" src = "images/personality_pic.jpg" alt = "Personality Pic">
  </div>
  <div class = "aboutchild2">
    <h2 id = "helloheading"> Hi, I'm Kathy. </h2>
    <p> I'm a senior at Cornell University, and I will be pursuing my Master
    of Professional Studies in Information Science come Fall 2018. </p>
    <p> I love the smell of rain and the texture of al dente pasta. I also
    have a Golden Retriever, and I enjoy cooing to him on FaceTime as he
    ignores my existence. </p>
    <p> For me, product design is an extension of my artistic and perfectionist self.
    Design is about appreciating the small things in life, and exploring
    what it means to be human. </p>
  </div>

</body>

</html>
