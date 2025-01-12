<?php
// Import file kết nối cơ sở dữ liệu
if (isset($_POST['login'])) {
    require_once "config.php"; 

// Kiểm tra khi người dùng gửi form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['matKhau'];
   

    // Xử lý thông tin người dùng
    if (!empty($email) && !empty($password) && !empty($captcha)) {
        $sql = "SELECT * FROM taikhoan_kh WHERE email = ?";
        $result = $conn->query($sql);    
        $row = $result->fetch_assoc();

        
        if ($row) {
            if (md5($password) === $row['password']) {
                echo "Đăng nhập thành công! ";
            } else {
                echo "Mật khẩu không chính xác. Vui lòng thử lại.";
            }
        } else {
            echo "Tên người dùng không tồn tại.";
        }
    } else {
        echo "Vui lòng nhập đầy đủ dữ liệu.";
    } 
}
}

 // Chuyển hướng đến trang chủ (homepage.php)
        header("Location: trangchu.php");
        exit(); // Dừng thực thi mã PHP sau khi chuyển hướng
    

?>
   <br style="clear:both">


