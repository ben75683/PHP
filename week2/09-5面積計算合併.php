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
if(isset($_POST["hi"])) 
  {
    $hi=$_POST["hi"];
    $low=$_POST["low"];
    $areatr=$hi*$low/2;
}
elseif(isset($_POST["len"])) 
  {
    $len=$_POST["len"];
    $wid=$_POST["wid"];
    $areas=$len*$wid;
}
elseif(isset($_POST["hi-T"]))
  {
    $hiT=$_POST["hi-T"];
    $flow=$_POST["flow"];
    $slow=$_POST["slow"];
    $areat=$hiT*($slow+$flow)/2;
}
else
  {
    $rad=$_POST["rad"];
    $arear=$rad*$rad*3.14159;
}

$submit=$_POST["submit"];

if($submit=="三角形面積") 
  {$ans=$areatr;}
elseif($submit=="矩形面積") 
  {$ans=$areas;}
elseif($submit=="梯形面積") 
  {$ans=$areat;}
else
  {$ans=$arear;}

?>
<table border="1" cellspacing="0">
        <tr>
            <td>三角形<br>
                <form method="post" action="09-5面積計算合併.php">
                    請輸入：高<input type="text" name="hi" size="4" ><br>
                    請輸入：底<input type="text" name="low" size="4"><br><br>
                    <input type="submit" name="submit" value="三角形面積"><br>
                </form>
            </td>
            <td>矩形<br>
                <form method="post" action="09-5面積計算合併.php">
                    請輸入：長<input type="text" name="len" size="4"><br>
                    請輸入：寬<input type="text" name="wid" size="4"><br><br>
                    <input type="submit" name="submit" value="矩形面積"><br>
                </form>
            </td>
            <td>梯形<br>
                <form method="post" action="09-5面積計算合併.php">
                    請輸入：高<input type="text" name="hi-T" size="4"><br>
                    請輸入：上底<input type="text" name="flow" size="4"><br>
                    請輸入：下底<input type="text" name="slow" size="4"><br>
                    <input type="submit" name="submit" value="梯形面積"><br>
                </form>
            </td>
            <td>圓形<br>
                <form method="post" action="09-5面積計算合併.php">
                    請輸入：半徑<input type="text" name="rad" size="4"><br><br><br>
                    <input type="submit" name="submit" value="圓形面積"><br>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                if($submit=="三角形面積")
                {   echo "高為：".$_POST["hi"]."<br>";
                    echo "底為：".$_POST["low"]."<br>";
                    echo "面積為：".$ans."<br>";
                } 
                ?>
            </td>
            <td>
                <?php
                if($submit=="矩形面積")
                {   echo "長為：".$_POST["len"]."<br>";
                    echo "寬為：".$_POST["wid"]."<br>";
                    echo "面積為：".$ans."<br>";
                } 
                ?>
            </td>
            <td>
                <?php
                if($submit=="梯形面積")
                {   echo "上底為：".$_POST["flow"]."<br>";
                    echo "下底為：".$_POST["slow"]."<br>";
                    echo "高為：".$_POST["hi-T"]."<br>";
                    echo "面積為：".$ans."<br>";
                }

                ?>
            </td>
            <td>
                <?php
                if($submit=="圓形面積")
                {   echo "半徑為：".$_POST["rad"]."<br>";
                    echo "面積為：".$ans."<br>";
                } 
                ?>
            </td>
        </tr>

</table>

</body>
</html>