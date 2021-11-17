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
    /*echo<<<end
    end;
    可以輸出多行資訊
    兩個end大小寫需相同
    */
    echo<<<end
    1
    2
    <br>
    3
    <br>
    (60).(35).<br>
    end;
    echo "PHP網頁以 Dreamweaver來編輯很方便!";
    //輸出變數$sna所儲存的資料並指定以H2標籤字顯示
    $sna="PHP程式班";
    echo "<h2>".$sna."</h2>";		
    echo "60人";   // 也可用 echo (60)."人";
    echo $sna."<br>";  //輸出變數值並且加入換行標籤
    echo (60).(35)."<br>" ; //也可用 echo (60)."人";中的「.」是連續二組列印資料的連接符號
    echo (60)."35<br>";

    $var1=566;
    $var2=5.66E+5;
    $var3="This a string.";
    $var4=566.0;
    
    //以gettype()函數,輸出對應的資料類型
    echo "566 的資料型態：";
    echo "<font color=blue>".gettype($var1)."</font><br>";
    echo "5.66E+5 的資料型態：";
    echo "<font color=blue>".gettype($var2)."</font><br>";
    echo '"This a string."的資料型態：';
    echo "<font color=blue>".gettype($var3)."</font><br>";
    echo "566.0 的資料型態：";
    echo "<font color=blue>".gettype($var4)."</font><br>";
    ?>
</body>
</html>