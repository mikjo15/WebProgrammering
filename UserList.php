<?php session_start(); // Always start session to look at the auth variable
  include 'sql/dbconnect.php';

  ///////////////////// Fetching all users in table -> Nice if made to function /////////////////////
  $sql = "SELECT * FROM users;";

  $stmt = $conn->prepare($sql);

  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $result = $stmt->fetchAll();
  ///////////////////// ///////////////////// ///////////////////// /////////////////////

  // Check if auth exists and is set, if true then show UserList.php
  if (isset($_SESSION['auth']) && ($_SESSION['auth'])) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Users</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="favicon/favicon.ico">
  </head>
  <body>
    <h1>Users</h1>

    <table class="userTable">
      <tr>
          <td>Created at</td>
          <td>Name</td>
          <td>Email</td>
          <td>Username</td>
          <td>Password</td>
      </tr>
      <tr>
        <?php
          foreach ($result as $user) {
            echo "<tr>" .
                "<td>" . $user["created"] . "</td>" .
                "<td>" . $user["name"] . "</td>" .
                "<td>" . $user["email"] . "</td>" .
                "<td>" . $user["username"] . "</td>" .
                "<td>" . $user["password"] . "</td>" .
                "</tr>";
          }
          ?>
      </tr>
    </table>

    <form class="" action="auth/logout.php" method="post">
      <button type="submit" name="button">Log out</button>
    </form>
  </body>
</html>
<?php } else { // If auth isn't set or it is false, then go back to index
  header("location: index.php");
} ?>
