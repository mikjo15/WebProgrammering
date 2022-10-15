<?php session_start();
$_SESSION["auth"] = False;

if (isset($_POST["username"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if($username=="Mikkel" & $password == "12345") {
    $_SESSION["auth"] = True;
    header("location: ../UserList.php");
  }
  else {
    $_SESSION["auth"] = False;
    header("location: ../registration.php");
  }
}
?>
