<?php

$arr1 = array(1,2,3,4,5);
$arr2 = array(9,8,7,6);

$MergeArr = array_merge($arr1,$arr2);
$MergeCount = count($MergeArr);
sort($MergeArr);

for ($i=0; $i < $MergeCount; $i++) { 
    echo $MergeArr[$i];
    echo " ";
}

?>