<?php
  session_start();
  if(!$_SESSION['auth']){
   header("Location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Users</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <?php echo $_SESSION["Hello"]; ?>
    <h1>Users</h1>
  </body>
</html>
