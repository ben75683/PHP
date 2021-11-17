<?php
/*
 * 判斷是否為三角形
 */
//三變數、三邊長
//任兩邊大於第三邊
$a=12;
$b=18;
$c=22;
echo $a+$b>$c && $a+$c>$b && $b+$c>$a?"是三角形":"不是三角形";
echo PHP_EOL;
if ($a+$b>$c && $a+$c>$b && $b+$c>$a) { 
    print("是三角形")
    ;}
    else{
    print("不是三角形");
}
echo PHP_EOL;
echo var_dump($a>10 ||$b>100 && $c>100);
echo var_dump(($a>10 ||$b>100) && $c>100);//會先運算and 再算or
?>