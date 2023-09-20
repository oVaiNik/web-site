<?php
  session_start();
  require_once 'connect.php';
  header('Content-Type: text/html; charset=utf-8');

  $mail = $_POST['mail'];
  $password = md5($_POST['password']);

  $check = mysqli_query($connect, "SELECT * FROM `users` WHERE `mail` = '$mail' AND `password` = '$password'");
  if(mysqli_num_rows($check) > 0){

      $user = mysqli_fetch_array($check);
      $_SESSION['id'] = $user['id'];
      $_SESSION['login'] = $user['login'];
      $_SESSION['mail'] = $user['mail'];
      $_SESSION['password'] = $user['password'];
      $_SESSION['avatar'] = $user['avatar'];

      // echo $_SESSION['id'];
      // echo $_SESSION['mail'];
      
      header('Location: ../profile.php');
  }else{
      $_SESSION['message'] = "Не верный почта или пароль";
      header('Location: ../index.php');
  }
?>
<pre>
  <?php
    print_r($check);
    print_r($user);
  ?>
</pre>
