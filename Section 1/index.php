<?php

/* 2. Array Manipulation: Given an array of integers, write a PHP function to find the sum of
all positive integers and the product of all negative integers in the array.*/

function sum_Array($array){
   $positive_sum = 0;
   $negative_sum = 0;
    foreach($array as $elment){
        if($elment < 0){
            $negative_sum += $elment;
        }else{
            $positive_sum += $elment;
        }
    }
    echo "Positive Sum is ". $positive_sum ."<br>";
    echo "Negative Sum is ". $negative_sum;
}


$array = [ 2, 4, 5, 6, -2, -4, -5, -4, -3, 13 ];

sum_Array($array);

?>