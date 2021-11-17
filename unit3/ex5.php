<?php
$x = 5985;
var_dump($x);
$x = 10.365;
var_dump($x);
$x = - 345; // 負數
var_dump($x);
$x = 0x8C; // 16進位
var_dump($x);
$x = 047; // 八進位數
var_dump($x);
$x = True;
var_dump($x);
$x = "字串";
var_dump($x);
$x = 2.4e3;
var_dump($x);
$x = 8E-5;
var_dump($x);
// 區分大小寫的常數名
define("GREETING", "歡迎訪問 Run.com");
echo GREETING; // 輸出 "歡迎訪問 Run.com"
echo '<br>';
echo greeting; // 輸出 "greeting"，但是有警告資訊，表示該常數未定義
?>