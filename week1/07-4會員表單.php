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
    echo "<h2><font color='purple'>PHP程式所回應的資料</font></h2>";
    echo "你的姓名是 : ".$_POST["uname"]."<p>";
    echo "你的密碼是 : ".$_POST["upass"]."<p>";

    ?>
</body>
</html>