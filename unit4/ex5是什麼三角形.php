<?php
$a=12;
$b=18;
$c=22;
if ($a*$a+$b*$b==$c*$c || $b*$b+$c*$c==$a*$a || $a*$a+$c*$c==$b*$b) {
    print("是直角三角形");
}elseif ($a==$b && $b==$c){
    print("是正三角形");
}elseif ($a==$b || $b==$c || $a==$c){
    print("是等腰三角形");
}elseif ($a+$b>$c && $a+$c>$b && $b+$c>$a){
    print("是一般三角形");
}else{
    print("不是三角形");
}
echo "<br>";

echo $a+$b>$c && $a+$c>$b && $b+$c>$a?"是三角形":"不是三角形";
echo "<br>";
echo ($a*$a+$b*$b==$c*$c or $b*$b+$c*$c==$a*$a or $a*$a+$c*$c==$b*$b)?"是直角三角形":"不是直角三角形";
echo "<br>";
echo $a==$b && $b==$c?"是正三角形":"不是正三角形";
echo "<br>";
echo ($a==$b or $b==$c or $a==$c)?"是等腰三角形":"不是等腰三角形";
echo "<br>";
?>