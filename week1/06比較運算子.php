<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>邏輯運算</title>
</head>
<body>
    <?php
    $a=12.33;
    $b=566;		//整數變數
    $c="566";	//字串變數
    echo "\$a = ".$a."<br>";
    echo "\$b = ".$b."<br>";
    echo "\$c = ".$c."<br><hr>";
    
    echo "<font color='purple'>";
    /////////////////////////////////////////////////
    if($a<$b){
        echo "\$a 小於 \$b <br>";
    }else{
        echo "\$a 大於 \$b <br>";
    }
    /////////////////////////////////////////////////
    if($b==$c){
        echo "\$b 等於 \$c <br>";
    }else{
        echo "\$b 不等於 \$c <br>";
    }
    /////////////////////////////////////////////////
    if($b===$c){
        echo "\$b 等於 \$c 且資料型態相同 <br>";
    }else{
        echo "\$b 不等於 \$c 或資料型態不相同 <br>";
    }
    /////////////////////////////////////////////////
    echo "<hr>";
    $c=true;
    $d=false;
    echo "<font color='blue'>";
    echo "\$c = true<br>";
    echo "\$d = false</font><br>";
    echo "\$c && \$d 運算結果 ";
    if($c && $d){
       echo "true<p>";
    }else{
       echo "false<p>";
    }
   echo "\$c xor \$d 運算結果 ";
    if($c xor $d){
       echo "true<p>";
    }else{
       echo "false<p>";
    }

    $e=566;
    $f=20;
    echo "<font color='blue'>";
    echo "\$e=566<br>";
    echo "\$f=20</font><br><hr>";
    
    $e += $f;
    echo "\$e += \$f 的結果是".$e."<p>";
    $f *=5;
    echo "\$f *=5 的結果是".$f."<p>";

    ?>
</body>
</html>