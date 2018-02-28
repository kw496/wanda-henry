<?php
include( "includes/init.php" );

$current_page_id = "contact";
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Contact</title>
</head>

<body>
  <?php include("includes/header.php");?>

  <form action="handling-form-page.php" method="post">
      <div class = "contact_block">
          <label for="name">Name</label> <br>
          <input type="text" id="name" name="user_name">
      </div>
      <div class = "contact_block">
          <label for="email">Email</label> <br>
          <input type="email" id="email" name="user_email">
      </div>
      <div class = "contact_block">
          <label for="msg">Message</label> <br>
          <textarea id="msg" name="user_message"></textarea>
      </div>
      <div class="button">
          <button type="submit">Send</button>
      </div>
  </form>
</body>

</html>
