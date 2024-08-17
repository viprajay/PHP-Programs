<?php

$arr = array(1,2,3,4,5,6);
$temp =0;
$arrSize = count($arr);

for ($i=0; $i < $arrSize ; $i++) { 
    
    $temp = $temp + $arr[$i];
}

echo $temp;

?>