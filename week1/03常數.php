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
    define("PI",3.14159);
    $name="張三豐";
    echo "<h2>".$name."</h2>";
    $rad=10;
    echo "圓面積=半徑*半徑*圓周率=";
    echo PI*$rad*$rad;

    echo "<p>";
    define("PI",6);
    $name="老王";
    echo "<h2>".$name."</h2>";
    $rad=10;
    echo "圓面積=半徑*半徑*圓周率=";
    echo PI*$rad*$rad;

    ?>
</body>
</html>