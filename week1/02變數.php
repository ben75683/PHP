<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $var1=20;
    $var2=20.8;
    $text="字串";
    $A=(2*3)+5;
    $B=150;
    echo "$text<br>";
    echo $text."<br>";
    echo "\$text<br>";
    echo gettype($var2)."<br>";
    echo gettype($text)."<br>";
    echo gettype($var1)."<br>";
    echo $var1*$var2."<br>";
    echo "$var1*$var2<br>";
    echo "$var1=".$var1."<br>";
    echo "\$var1=".$var1."<br>";
    echo $A."<br>";
    echo "\$A=".$A."<br>";
    $AA=10;
    $BB=168;
    //設定變數之間的參考,$AA和$BB兩個變數會互相影響
    $AA=&$BB;	
    echo "變數參考後......<br>";
    echo "\$AA = ".$AA."<br>";
    echo "\$BB = ".$BB."<br>";
    $AA=1000;
    echo "<b>\$AA變數值</b>改變後......<br>";
    echo "\$AA = ".$AA."<br>";
    echo "\$BB = ".$BB."<br>";
    $BB=666;
    echo "<b>\$BB變數值</b>改變後......<br>";
    echo "\$AA = ".$AA."<br>";
    echo "\$BB = ".$BB."<br>";
    

    ?>
</body>
</html>