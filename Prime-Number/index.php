<?php

function isPrime($num){
    if($num <=1){
        return false;
    }
    for ($i=2; $i <sqrt($num) ; $i++) { 
        if($num % $i==0){
            return false;
        }
    }
    return true;
}

$num = 10;

if(isPrime($num)){
    echo "$num is a prime number";
}else{
    echo "$num not a prime number";
}

?>