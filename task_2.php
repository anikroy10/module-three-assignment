<?php
//Array Manipulation
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeEvenNumbers($numbers){
    $filteredArray = array_filter($numbers, function($number){
        return ($number % 2) != 0;
    });
    print_r($filteredArray);
}

removeEvenNumbers($numbers);