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
			<form action="vendor/singin.php" method="post" class="form-action">
        <label>Почта</label>
				<input type="email" class="field" name="mail" title="Поле не должа быть пустой" placeholder="Введите почту" required>
        <label>Пароль</label>
        <input type="password" class="field" name="password" title="Поле не должа быть пустой" placeholder="Введите пароль" required>
				<button class="btn" type="submit">Войти</button>
        <p>
          У вас нет аккаунта, то <a href="registration.php" class="link">Регистрируйте здесь</a>!
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
