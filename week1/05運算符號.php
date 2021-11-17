<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>算式運算</title>
</head>
<body>
    <?php
    $a=7*3-5;
    $b=3;
    $c=9%7;
    echo "原始\$a的值=<b>".$a."</b><br>";
    echo $a%$b."<br>";
    echo $a++."<br>";
    echo $a."<br>";
    echo ++$a."<br>";

    echo "<p>原始 \$b 的值 = <b>".$b."</b><br>";
    //先傳回$b的值再做加1的動作
    echo "\$b++ 的值 = <b>".$b++."</b><br>";	
    echo "最後 \$b 的值 = <b>".$b."</b>";
    
    

    ?>
</body>
</html>