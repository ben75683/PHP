<?php
$x=10; 
echo ++$x; // 輸出 11 
echo PHP_EOL;

$y=10;
echo $y++; // 先輸出y=10再+1，實際上y=11
echo PHP_EOL;
echo $y;
echo PHP_EOL;

$z=5;
echo --$z;// 輸出 4
echo PHP_EOL;

$i=5;
echo $i--; // 先輸出i=5再-1，實際上i=4
echo PHP_EOL;
echo $i;
echo PHP_EOL;

echo var_dump(5=="5");
echo var_dump(5==="5");//絕對等於，值、格式均相等
echo var_dump(5!="4");//不等於
echo var_dump(5!==5);
echo var_dump(5!=="5");//絕對不等於，值"或"格式不相等，其中一個不同(嚴格)，即回傳true
echo var_dump(6>5 xor 5>3);//xor只有其中之一為true回傳true，兩者均為true回傳false
echo PHP_EOL;
echo var_dump(!(2>3));// !非，不為true時回傳true
?>