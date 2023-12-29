<?php
echo "<h2> Jan 2024 </h2>";

/* From codewars -- When provided with a number between 0-9, return it in words.
    Input :: 1
    Output :: "One".

If your language supports it, try using a switch statement. */

/* Started with this array, but couldn't get a direction from there... swapped to switch
{
  $number = array(
    0 =>"ZERO",
    1 => "ONE",
    2 => "TWO",
    3 => "THREE",
    4 => "FOUR",
    5 => "FIVE",
    6 => "SIX",
    7 => "SEVEN",
    8 => "EIGHT",
    9 => "NINE");
  
  return ""; */


function switch_it_up($number) {

  switch ($number) {
    case 0:
      return "zero";
      break;
    case 1:
        return "one";
        break;    
    case 2:
        return "two";
        break;
    case 3:
        return "three";
        break;
    case 4:
        return "four";
        break;
    case 5:
        return "five";
        break;
    case 6:
        return "six";
        break;    
    case 7:
        return "seven";
        break;
    case 8:
        return "eight";
        break;
    case 9:
        return "nine";
        break;
  }
}
// first try!


/* From codewars -- You get an array of numbers, return the sum of all of the positives ones.

Example [1,-4,7,12] => 1 + 7 + 12 = 20

Note: if there is nothing to sum, the sum is default to 0.*/

function positive_sum($arr) {
    $total = 0;
    foreach($arr as $number) {
        if ($number > 0) {
            $total = $total + $number;
        }
    }
    return $total;
}
/* took me a while, even with help from solutions, but was close... 
had my return in the wrong brackets for a while! */
  


// From codewars -- Write a function `greet` that returns "hello world!"
function greet() {
    return "hello world!";
}
// first try!

?>