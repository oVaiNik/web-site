<?php
  session_start();
  header('Content-Type: text/html; charset=utf-8');
  if($_SESSION['login']){
    header('Location: profile.php');
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Авторизация</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
			<form action="vendor/singup.php" method="post" class="form-action" enctype="multipart/form-data">
        <label>Логин</label>
        <input type="text" class="field" name="login" title="Поле не должа быть пустой" placeholder="Введите логин" required>

        <label>Почта</label>
				<input type="email" class="field" name="mail" title="Поле не должа быть пустой" placeholder="Введите почту" required>
        <label>Аватарка</label>
        <input type="file" name="avatar" class="btn">
        <label>Пароль</label>
        <input type="password" class="field" name="password" title="Поле не должа быть пустой" placeholder="Введите пароль" required>
        <label>Подтвердите пароль</label>
        <input type="password" class="field" name="password_two" title="Поле не должа быть пустой" placeholder="Подтвердите пароль" required>
				<button class="btn" type="submit">Регистрация</button>
        <p>
          У вас аккаунта, то <a href="/" class="link">Войдите здесь</a>!
        </p>
        <?php
          if($_SESSION['message']){
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
          }
          unset($_SESSION['message']);
        ?>
			</form>
</body>
</html>
