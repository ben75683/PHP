<?php
$name="run";
$a= <<<EOF
 "abc"$name
 "123"
EOF;
// 結束需要獨立一行且前後不能空格 
echo $a;
$g= <<<EOD
\n "PHP"
 "好難"
EOD;
echo $g;

?>