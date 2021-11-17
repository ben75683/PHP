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

$hiT=$_POST["hi-T"];
$flow=$_POST["flow"];
$slow=$_POST["slow"];
$area=$hiT*($slow+$flow)/2;
?>
<table border="1" cellspacing="0">
        <tr>
            <td>三角形<br>
                <form method="post" action="09-1面積計算.php">
                    請輸入：高<input type="text" name="hi" size="4"><br>
                    請輸入：底<input type="text" name="low" size="4"><br><br>
                    <input type="submit" value="送出"><br>
                </form>
            </td>
            <td>矩形<br>
                <form method="post" action="09-2面積計算.php">
                    請輸入：長<input type="text" name="len" size="4"><br>
                    請輸入：寬<input type="text" name="wid" size="4"><br><br>
                    <input type="submit" value="送出"><br>
                </form>
            </td>
            <td>梯形<br>
                <form method="post" action="09-3面積計算.php">
                    <?php
                    echo '請輸入：高<input type="text" name="hi-T" size="4" value="'.$hiT.'"><br>';
                    echo '請輸入：上底<input type="text" name="flow" size="4" value="'.$flow.'"><br>';
                    echo '請輸入：下底<input type="text" name="slow" size="4" value="'.$slow.'"><br>'; 
                    ?>
                    <input type="submit" value="送出"><br>
                </form>
            </td>
            <td>圓形<br>
                <form method="post" action="09-4面積計算.php">
                    請輸入：半徑<input type="text" name="rad" size="4"><br><br><br>
                    <input type="submit" value="送出"><br>
                </form>
            </td>
        </tr>
        <tr>
            <td>面積為：

            </td>
            <td>面積為：

            </td>
            <td>面積為：
                <?php
                echo $area; 
                ?>
            </td>
            <td>面積為：

            </td>
        </tr>

</table>

</body>
</html>