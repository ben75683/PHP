<?php
define("pi",3.1415926535,true);
echo "請輸入圓的半徑:";
$r=intval(fgets(STDIN));
echo "面積為: ",$r*$r*pi;
?>