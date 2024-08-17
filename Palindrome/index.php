
<?php

$Number = 1234321;
$Temp = $Number;
$Reverse = 0;
while($Number>0){
    $Digit = $Number%10;
    $Reverse = $Reverse *10 + $Digit;
    $Number = floor($Number /10);
}

if($Reverse==$Temp){
    echo "$Temp is a Palindrome";
}else{
    echo "$Temp is not a Palindrome";
}

?>

