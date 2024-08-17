<?php

$Number = array(10,4,9,2,8,1,5,6);
$Number[]=(7);
sort($Number);
$ArrayLength=count($Number);

for($i=0;$i<$ArrayLength;$i++){
    echo $Number[$i];
    echo " ";
}

?>
