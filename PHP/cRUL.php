<?php
// URL của API công khai
$url = "https://jsonplaceholder.typicode.com/posts";

// Khởi tạo một session cURL
$ch = curl_init();

// Thiết lập URL và các tùy chọn cURL
curl_setopt($ch, CURLOPT_URL, $url);          // Thiết lập URL cho yêu cầu
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Trả về kết quả dưới dạng chuỗi

// Thực hiện yêu cầu GET
$response = curl_exec($ch);

// Kiểm tra xem có lỗi xảy ra trong quá trình thực hiện hay không
if(curl_errno($ch)) {
    echo 'Lỗi cURL: ' . curl_error($ch);
} else {
    // Hiển thị kết quả
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if($http_code == 200) {
        // Giải mã JSON thành mảng PHP
        $data = json_decode($response, true);
        
        // Hiển thị dữ liệu
        foreach ($data as $post) {
            echo "ID: " . $post['id'] . "<br>";
            echo "Title: " . $post['title'] . "<br>";
            echo "Body: " . $post['body'] . "<br><br>";
        }
    } else {
        echo "Yêu cầu thất bại với mã trạng thái HTTP: " . $http_code;
    }
}

// Đóng session cURL
curl_close($ch);
?>

