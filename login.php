<?php

$connection = mysqli_connect("localhost", "root", "", "login_form") or
              die("Failed connection to the database!");

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $select_user = "select * from users_info where username='$username' and
  password='$password'";
  $query = mysqli_query($connection, $select_user);
  $check_user = mysqli_num_rows($query);

  if ($check_user == 1) {
    $user = $_POST['username'];
    $get_user = "select * from users_info where username='$user'";
    $run_user = mysqli_query($connection, $get_user);
    $row = mysqli_fetch_array($run_user);

    $username = $row['username'];

    echo "<script>alert('Login success!')</script>";
  }else {
    echo "<script>alert('Incorrect username or password!')</script>";
  }
}
?>
