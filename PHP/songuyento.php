<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kiểm tra số nguyên tố</h1>
    <form action="" method="get">
        <h3>Nhập số nguyên tố: </h3>
        <input type="text" name="number">
        <button type="submit">Kiểm tra</button>
    </form>
    
    <?php
    function isPrime($n){
        if($n<2){
            return false;
        }
        for($i=2;$i<=sqrt($n);$i++){
            if($n % $i == 0){
                return false;
            }
        }
        return true;     
    }
    if(isset($_GET['number'])){
        $number=$_GET['number'];
        if(is_numeric($number) && isPrime($number)){
            echo "Số $number là số nguyên tố";
        }else{
            echo "Số $number không phải là số nguyên tố";
        }
    }
    ?>
</body>
</html>