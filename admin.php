<?php
  session_start();
  require_once 'vendor/connect.php';
  header('Content-Type: text/html; charset=utf-8');
  if(!$_SESSION['login'] === "admin"){
    header('Location: /');
  }

    $sql = mysqli_query($connect, "SELECT * FROM `users`");

    if (isset($_GET['del'])){
      $id = $_GET['del'];
      $query = mysqli_query($connect, "DELETE FROM `users` WHERE id='$id'");
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Авторизация</title>
	<link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
			<div class="container">
          <a href="vendor/exit.php" class="logout-btn"><span>Выход</span></a>
          <div class="">
            <table>
              <thead>
                  <tr><th>id</th><th>login</th> <th>mail</th> <th>avatar</th> <th colspan="2"> Изменить</th> </tr>
              </thead>
              <tbody>
                <?php
                    while ($result = mysqli_fetch_array($sql)){
                      ?>
                      <tr>
                      <td> <?= $result['id'] ?></td>
                      <td> <?= $result['login'] ?></td>
                      <td> <?= $result['mail'] ?></td>
                      <td> <?= $result['avatar'] ?></td>
                      <td> <a href="vendor/Update.php?update=<?= $result['id'] ?>"> Редактировать </a></td>
                      <td> <a href="admin.php?del=<?= $result['id']?>"> Удалить </a></td>
                      </tr>
                      <?php
                    }
                    ?>
              </tbody>
            </table>
          </div>
      </div>
</body>
</html>
