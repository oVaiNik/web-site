<?php
  require_once 'connect.php';
  session_start();

  $login = $_POST['login'];
  $mail = $_POST['mail'];
  $password = $_POST['password'];
  $password_two = $_POST['password_two'];

  if($password === $password_two){
      $path = 'uploads/' . time() . $_FILES['avatar']['name'];
      if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)){
        $_SESSION['message'] = "Ошибка при загрузке картинки!";
        header('Location: ../index.php');
      }

      $password = md5($password);
      mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `mail`, `password`, `avatar`) VALUES (NULL, '$login', '$mail','$password', '$path')");
      $_SESSION['message'] = "Регистрация прошла успешно!";
      header('Location: ../index.php');
  }
  else{
    $_SESSION['message'] = "Пароли не совпадают";
    header('Location: ../registration.php');
  };
?>
