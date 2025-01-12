<?php
// Thông tin kết nối MySQL
$servername = "localhost";
$username = "root";
$password = ""; // Mật khẩu (thường để trống nếu dùng WAMP)
$dbname = "cgv"; // Tên cơ sở dữ liệu (theo file SQL)

// Kết nối đến MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}  else {
    echo "Kết nối thành công!";
}
// Sử dụng bộ mã UTF8 khi thực hiện các thao tác dữ liệu
$conn->set_charset("utf8");
?>