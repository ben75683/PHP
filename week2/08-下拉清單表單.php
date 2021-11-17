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
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $fruit=$_POST["fruit"];
    for($x=0;$x<6;$x++)
{ 
           $sports="sport".$x;
           //sport與索引值合併成新字串
           //利用isset函數判定核取方塊是否被選取
          if(isset($_POST["$sports"]))
            //true表示有被選取
            {$sport[]=$_POST["$sports"];}
          }


    echo $name."你好!<br>";
    echo "你的性別是：".$gender."<br>";
    echo "你喜歡的水果是：".$fruit."<br>";
    echo "喜歡的運動有這些 : ";
    for($x=0;$x<count($sport);$x++)
{
          echo  $sport[$x]." , ";
       }
    ?>
    <button><a href="./08-下拉清單表單.html">上一頁</a></button> 
</body>
</html>