<?php
namespace App\Aly\Challenge_17;
class Conditions
{
    # Even or Odd
    public static function if($num)
    {
        if($num % 2 == 0) {
            echo "This number is even";
        }
        else{
            echo "This number is odd";
        }
        
    }
}