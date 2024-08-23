<?php
$servername = "localhost";
$database = "crawl";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="select * from products";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Tên sản phẩm: " . $row["name"]. " - Giá: " . $row["price"]. "<br>";
    }
}

mysqli_close($conn);
?>