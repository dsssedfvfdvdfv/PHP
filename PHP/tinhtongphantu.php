<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h3>Nhập các số nguyên (cách nhau bằng dấu phẩy):</h3>
        <input type="text" name="numbers" placeholder="1, 2, 3, 4, 5">
        <button type="submit">Tính tổng</button>
    </form>

    <?php 
      if($_SERVER["REQUEST_METHOD"]=="POST"){
        $numbers=$_POST['numbers'];
        $arr=explode(',',$numbers);
        $arr=array_map('intval',$arr);
        function sum($arr){
            $sum=0;
            foreach($arr as $value){
                $sum+=$value;
            }
            return $sum;
        }
        $total=sum($arr);
        echo "<h3>Tổng các phần tử trong mảng là: $total</h3>";
      }   
    
    ?>
</body>

</html>