<?php
  session_start();
  header('Content-Type: text/html; charset=utf-8');
  if(!$_SESSION['login']){
    header('Location: /');
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Авторизация</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="logout">
    <a href="vendor/exit.php" class="logout-btn"><span>Выход</span></a>
  </div>

			<div class="profile">
        <img src="<?= $_SESSION['avatar'] ?>" alt="пусто">
        <h2 style="margin: 10px 0"> <?= $_SESSION['login'] ?></h2>
        <a href="#"> <?= $_SESSION['mail'] ?> </a>

        <? if($_SESSION['login'] === "admin"){
          echo "<a href='admin.php'> Панель управление Админа</a>";
        }  ?>

        <a href="website/" class="link">Войти на главную страницу</a>
      </div>
</body>
</html>
