<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Tìm kiếm</h2>
  <form method="GET" action="">
    <input type="text" name="keyword" placehoder="Nhập từ khóa">
    <button type="submit">Tìm kiếm</button
  </form>
  <?php
   if (isset($_GET['keyword'])) {
        echo "<p>Bạn đang tìm kiếm từ khóa: <b>" . $_GET['keyword'] . "</b></p>";
    }
  ?>
</body>

</html>