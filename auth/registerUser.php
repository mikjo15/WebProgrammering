<?php session_start();
  include '../sql/dbconnect.php';

  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];

  if ($password == $password2) {
    $hashed_psw = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, username, password)
            VALUES (:name, :email, :username, :hashed_psw);";


    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':hashed_psw', $hashed_psw);

    $stmt->execute();

    $_SESSION["auth"] = True;
    header("location: ../UserList.php");
  } else {
    echo "Passwords not the same";
  }
?>
