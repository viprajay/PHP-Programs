<?php

$num = 12322901;
$temp = 0;

while($num > 1){
    $rem = $num % 10;
    $temp = ($temp * 10)+$rem;
    $num = $num/10;
}

echo "Reverse number: $temp"

?>