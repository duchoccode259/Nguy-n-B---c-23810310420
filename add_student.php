<!DOCTYPE html>
<html>
<head>
    <title>Thêm sinh viên</title>
</head>
<body>
    <h2>Form thêm sinh viên</h2>
    <form method="post" action="">
        <label>Họ tên:</label>
        <input type="text" name="fullname" required><br><br>

        <label>Mã SV:</label>
        <input type="text" name="student_code" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <button type="submit">Thêm mới</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require 'db_connect.php';

        $fullname = $_POST['fullname'];
        $student_code = $_POST['student_code'];
        $email = $_POST['email'];

        $sql = "INSERT INTO students (fullname, student_code, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fullname, $student_code, $email]);

        echo "<p style='color:green'>Thêm sinh viên thành công!</p>";
    }
    ?>
</body>
</html>
