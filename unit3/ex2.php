<?php
/* 計算BMI的程式
 * 
 */
  $h= 1.75 ;//設定身高值，單位為公尺
  $w= 85 ;//設定體重的值，單位為公斤
  $bmi=$w/$h/$h;//bmi計算公式
  echo "你的BMI為: $bmi 單位 \n";
  echo "你的BMI為: ",$bmi," kg/m2 \n";
  echo '你的BMI為: $bmi 單位 ';
  echo "\n\$ \n";
  echo "\$h";//顯示結果
?>