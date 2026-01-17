<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sinh viên</title>
    <style>
        table { border-collapse: collapse; width: 70%; margin: 20px auto; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        h2 { text-align: center; }
    </style>
</head>
<body>
    <h2>Danh sách sinh viên</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Mã SV</th>
            <th>Email</th>
            <th>Hành động</th>
        </tr>
        <?php
        require 'db_connect.php';

        try {
            $sql = "SELECT * FROM students";
            $stmt = $conn->query($sql);
            $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($students) > 0) {
                foreach ($students as $student) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($student['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($student['fullname']) . "</td>";
                    echo "<td>" . htmlspecialchars($student['student_code']) . "</td>";
                    echo "<td>" . htmlspecialchars($student['email']) . "</td>";
                    echo "<td><a href='#'>Sửa</a> | <a href='#'>Xóa</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Chưa có sinh viên nào</td></tr>";
            }
        } catch (PDOException $e) {
            echo "<tr><td colspan='5'>Lỗi khi lấy dữ liệu</td></tr>";
        }
        ?>
    </table>
</body>
</html>
