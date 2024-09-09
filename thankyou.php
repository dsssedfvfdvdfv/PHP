<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $company = trim($_POST["company"]);


    $errors = [];

    if (empty($name)) {
        $errors[] = "Họ và tên là bắt buộc.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email không hợp lệ.";
    }
    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        $errors[] = "Số điện thoại phải là 10 chữ số.";
    }
    if (empty($company)) {
        $errors[] = "Lời nhắn không được để trống.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo "<a href='javascript:history.back()'>Quay lại</a>";
    } else {
        echo "<div style='width:40%; margin:0px 31%; border:1px solid; padding: 20px; box-sizing: border-box;'>
        <div style='padding:20px;'>
        <h1 style='color: blue;'>Cám ơn đã liên hệ chúng tôi!</h1>
        <h4>Chúng tôi sẽ sớm liên hệ với bạn trong 1 ngày làm với thông tin bạn đã cũng cấp dưới đây:</h4>
        <div style='display: flex; flex-direction: column;'>
            <div style='display: flex; margin-bottom: 10px;'>
                <strong style='width: 150px;'>Tên:</strong>
                <span>$name</span>
            </div>
            <div style='display: flex; margin-bottom: 10px;'>
                <strong style='width: 150px;'>Email:</strong>
                <span>$email</span>
            </div>
            <div style='display: flex; margin-bottom: 10px;'>
                <strong style='width: 150px;'>Số điện thoại:</strong>
                <span>$phone</span>
            </div>
            <div style='display: flex;'>
                <strong style='width: 150px;'>Công ty:</strong>
                <span style='word-wrap: break-word; overflow-wrap: break-word;'>$company</span>
            </div>
        </div>
        </div>        
        </div>";

    }
} else {
    header("Location: index.php");
    exit();
}
?>
