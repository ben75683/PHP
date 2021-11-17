<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>伺服器端表單</title>
</head>
<body>
    <?php
    $len=$_POST["len"];
    $hei=$_POST["hei"];
    $area=$len*$hei/2;
    echo "三角形的面積為：".$area;

    ?>
       <button><a href="./07-1html表單.html">上一頁</a></button> 
</body>
</html>