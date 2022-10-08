<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
      <form class="form" method="post">
        <label for="name">Name</label> <br />
        <input type="text" name="name" id="name" pattern="[a-zA-Z0-9]+" minlength="4" maxlength="10" placeholder="Jens22" required/> <br />
        <label for="email">Email</label> <br />
        <input type="text" name="email" id="email" pattern="/\S+\.+\S+@\S+\.([a-z]|[A-Z]){1,5}/g" placeholder="Jens.Poulsen@gmail.com" required/> <br />
        <label for="username">Username</label> <br />
        <input type="text" name="username" id="username" pattern="[a-zA-Z0-9]+" minlength="4" maxlength="10" placeholder="Jen27P" required/> <br />
        <label for="password">Password</label> <br />
        <input type="password" name="password" id="password" pattern="[a-zA-Z0-9]+" minlength="6" maxlength="16" placeholder="******" required/> <br />
        <label for="password2">Repeat password</label> <br />
        <input type="password" name="password2" id="password2" pattern="[a-zA-Z0-9]+" minlength="6" maxlength="16" placeholder="******" required/> <br />
        <button type="submit" name="button">Register</button>
        <p>Already a user? Wuhuu darny good! Click right <a href="index.php">HERE!</a></p>
      </form>
    </div>
  </body>
</html>
