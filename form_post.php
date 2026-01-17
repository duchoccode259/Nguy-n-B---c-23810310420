<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Đăng ký</h2>
  <form action="" method="POST">
    <label for="name">Tên</label>
    <input type="text" name="name" placehoder="Tên"><br>
    <label for="password">Mật khẩu:</label>
    <input type="password" name="password" placehoder="Mật khẩu"><br>
    <button type="submit">Đăng ký
  </form>
  <?php
    if (isset($_POST['name'])) {
        echo "<p>Đã nhận thông tin của <b>" . $_POST['name'] . "</b></p>";
    }
    ?>
</body>
</html>