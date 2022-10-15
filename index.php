<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="favicon/favicon.ico">
  </head>
  <body>
    <div class="container">
      <form class="form" method="post" action="auth/login.php">
        <label for="username">Username</label> <br />
        <input type="text" name="username" id="username" placeholder="Username"/> <br />
        <label for="password">Password</label> <br />
        <input type="text" name="password" id="password" placeholder="Password"/> <br />
        <button type="submit" name="button">Log In</button>
        <p>If you're not a user, click right <a href="registration.php">HERE!</a></p>
      </form>
    </div>
  </body>
</html>
