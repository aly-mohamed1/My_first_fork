<?php

# Question 1

$numbers = [5, 12, 18, 25, 30, 42, 55];
$result = array_filter($numbers, function ($number) {
    return $number % 2 !== 0;
});


## Question 2

$numbers = [10, 15, 20, 25, 30];
$square = array_map(function ($number) {
    return $number ** 2;
    },
    $numbers
);



