<?php
if (isset($_POST["username"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if($username=="Mikkel" & $password == "12345") {
    header("location: UserList.php");
  }
  else {
    header("location: registration.php");
  }
}
?>
