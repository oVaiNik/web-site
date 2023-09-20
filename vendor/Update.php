<?php
  session_start();
  require_once 'connect.php';
  header('Content-Type: text/html; charset=utf-8');
  if(!$_SESSION['login'] === "admin"){
    header('Location: /');
  }
  $login = $_POST['login'];
  $mail = $_POST['mail'];
    $sql = mysqli_query($connect, "SELECT * FROM `users` Where id='$id'");

    if (isset($_GET['update'])){
      $id = $_GET['update'];
      $query = mysqli_query($connect, "UPDATE `users` SET `login` = '.$login.', `mail` = '.$mail.' WHERE `id` = '.$id.';");
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Авторизация</title>
	<link href="../css/main.css" rel="stylesheet" type="text/css">
	<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
          <a href="../admin.php" class="logout-btn"><span>Назад</span></a>
          <div class="">
            <form action="../admin.php" method="post" class="form-action" enctype="multipart/form-data">
              <label>Логин</label>
              <input type="text" class="field" name="login" title="Поле не должа быть пустой" placeholder="Редактировать логин" required>

              <label>Почта</label>
              <input type="email" class="field" name="mail" title="Поле не должа быть пустой" placeholder="Редактировать почту" required>
              <button class="btn" type="submit">Редактировать</button>
          </div>
      
</body>
</html>
