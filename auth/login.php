<?php session_start();
include '../sql/dbconnect.php';
$_SESSION["auth"] = False;

if (isset($_POST["username"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM users WHERE username=:username";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':username', $username);

  $stmt->execute();

  //Get the returned array and check if the password verifies
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $result = $stmt->fetchAll();

  foreach ($result as $user) {
    if(password_verify($password, $user["password"])) {
      $_SESSION["auth"] = True;
      header("location: ../UserList.php");
    } else {
      $_SESSION["auth"] = False;
      header("location: ../registration.php");
    }
  }
}
?>

<!-- It works on the password Aa1234!,
men ikke hvis jeg copy/paster nedenstående -->
<!-- Aa1234! -->
