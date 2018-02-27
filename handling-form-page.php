<?php
$user_name = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$user_email = filter_input(INPUT_POST, 'user_email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

function output_message($name, $email) {
  echo 'Thank you' . $name . '! Your message was sent perfectly. I will email you
  at' . $email . '.';
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Handling Form</title>
</head>

<body>
  <?php echo output_message( $user_name, $user_email)?>
  <p> <a href = contact.php> Go Back </a> </p>
</body>

</html>
