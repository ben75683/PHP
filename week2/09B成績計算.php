<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成績計算</title>
</head>
<body>
    <?php
    echo "<h1>成績單</h1>";
    $cl=$_POST["class"];
    $nm=$_POST["number"];
    $name=$_POST["name"];

    $ch=$_POST["ch"];
    $eg=$_POST["eg"];
    $mt=$_POST["mt"];
    $ph=$_POST["ph"];
    $all=$ch+$eg+$mt+$ph;
    $avg=$all/4;

    if($ch>=90)
         { $chlev="優等";}
       elseif($ch>=80)
         { $chlev="甲等";}
       elseif($ch>=70)
         { $chlev="乙等";}
       elseif($ch>=60)
         { $chlev="丙等";}
       else
         { $chlev="丁等";}

    if($eg>=90)
         { $eglev="優等";}
       elseif($eg>=80)
         { $eglev="甲等";}
       elseif($eg>=70)
         { $eglev="乙等";}
       elseif($eg>=60)
         { $eglev="丙等";}
       else
         { $eglev="丁等";}
         
    if($mt>=90)
         { $mtlev="優等";}
       elseif($mt>=80)
         { $mtlev="甲等";}
       elseif($mt>=70)
         { $mtlev="乙等";}
       elseif($mt>=60)
         { $mtlev="丙等";}
       else
         { $mtlev="丁等";}

    if($ph>=90)
         { $phlev="優等";}
       elseif($ph>=80)
         { $phlev="甲等";}
       elseif($ph>=70)
         { $phlev="乙等";}
       elseif($ph>=60)
         { $phlev="丙等";}
       else
         { $phlev="丁等";}
    
    echo "你的姓名為：".$name."　　";
    echo "你的班級為：".$cl."<br>";
    echo "你的座號為：".$nm."<br>";
    echo "國文：".$ch."　　".$chlev."<br>";
    echo "英文：".$eg."　　".$eglev."<br>";
    echo "數學：".$mt."　　".$mtlev."<br>";
    echo "物理：".$ph."　　".$phlev."<br>";

    echo "<hr>";
    echo "總分：".$all;
    echo "平均：".$avg;
    ?>
    <p><a href="./09B成績計算.html">做下一題</a></p>
    
</body>
</html>