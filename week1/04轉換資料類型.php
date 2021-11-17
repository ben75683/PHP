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
    $data="345";
    echo "$data=".gettype($data)."<br>";
    settype($data,float);
    echo "$data=".gettype($data)."<br>";

    $data2=312.8;
    echo "$data2=".gettype($data2)."<br>";
    $data2=(int)$data2;
    /*php7.0版本已經不用settype($data,float);的格式，
                 可改用$data=(float) $data;方式來變更資料型態
    */
    echo "$data2=".gettype($data2)."<br>";
    ?>
</body>
</html>