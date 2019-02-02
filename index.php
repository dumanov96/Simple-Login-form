<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple login form</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="log-form">
      <h2>Login to your account</h2>
    <form action="" method="post">
      <input type="text" name="username" class="username" placeholder="username" autocomplete="off" required />
      <input type="password" name="password" class="password" placeholder="password" required />
      <button type="submit" name="login" class="btn">Login</button>
    </form>
    </div>

  <?php include('login.php'); ?>
  </body>
</html>
