<?php
echo "<h2> Jan 2024 </h2>";

/* Can you find the needle in the haystack?

Write a function findNeedle() that takes an array full of junk but containing one "needle"

After your function finds the needle it should return a message (as a string) that says:

"found the needle at position " plus the index it found the needle, so:

Example(Input --> Output)

["hay", "junk", "hay", "hay", "moreJunk", "needle", "randomJunk"] --> "found the needle at position 5" 
Note: In COBOL, it should return "found the needle at position 6" */



function findNeedle($haystack) {
    // your code here
    $pos = array_search('needle', $haystack);
    if ($pos !== false){
        return "found the needle at position $pos";
    }
}
// passed with some google help



/* There was a test in your class and you passed it. Congratulations!
But you're an ambitious person. You want to know if you're better than the average student in your class.

You receive an array with your peers' test scores. Now calculate the average and compare your score!

Return True if you're better, else False!

Note:
Your points are not included in the array of your class's points. 
For calculating the average point you may add your point to the given array! */

function betterThanAverage($classPoints, $yourPoints) {
    $avgPoints = array_sum($classPoints) / count($classPoints);
    if($yourPoints > $avgPoints){
        return true;
    }else{
        return false;
    }
  }
// success! (thanks in part to google)


/* Create a function that takes an integer as an argument and returns "Even" for even numbers or "Odd" for odd numbers. */

function even_or_odd(int $n): string {
    if($n % 2 == 0){
        return "Even";
    }
    else{
        return "Odd";
    }
  }

  // passed first try - with some help from google

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