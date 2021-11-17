<?php
$c=738;//應付金額
$p=1000;//實付金額
$g=$p-$c;//找錢金額
echo "應找金額$g 元";
echo PHP_EOL;
echo "找500元",intdiv($g,500),"張";
echo PHP_EOL;
echo "找100元",intdiv($g%500,100),"張";
echo PHP_EOL;
echo "找50元",intdiv($g%100,50),"個";
echo PHP_EOL;
echo "找10元",intdiv($g%50,10),"個";
echo PHP_EOL;
echo "找5元",intdiv($g%10,5),"個";
echo PHP_EOL;
echo "找1元",$g%5,"個";
?>