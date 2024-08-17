<?php
$arr = array(1,2,2,3,4,5,5,6);
$duplicateArr = array_diff_assoc($arr,array_unique($arr));
print_r($duplicateArr);
?>
