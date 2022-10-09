<?php
  session_start(); // Always start session to look at the auth variable
  // Check if auth exists and is set, if true then show UserList.php
  if (isset($_SESSION['auth']) && ($_SESSION['auth'])) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Users</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <h1>Users</h1>
    <form class="" action="auth/logout.php" method="post">
      <button type="submit" name="button">Log out</button>
    </form>
  </body>
</html>
<?php } else { // If auth isn't set or it is false, then go back to index
  header("location: index.php");
} ?>
