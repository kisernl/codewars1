<?php
echo "<h2> Dec 2024 </h2>";


/* from codewars - In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G". 
Your function receives one side of the DNA (string, except for Haskell); you need to return the other complementary side. 
DNA strand is never empty or there is no DNA at all (again, except for Haskell).

Example: (input --> output)

"ATTGC" --> "TAACG"
"GTAT" --> "CATA" */

function DNA_strand($dna) {
$replace = array(
  "T" => "A",
  "A" => "T",
  "C" => "G",
  "G" => "C");
$modifiedstring = strtr($dna, $replace);
return $modifiedstring;
}


// Finally landed on this bit of simple code (help from ChatGPT):
$inputString = "Hello World";
$translationTable = [
    "H" => "J",
    "e" => "i",
    "o" => "a",
    "d" => "k"
];

$modifiedString = strtr($inputString, $translationTable);

// Output the modified string
echo $modifiedString; // Output: Jilla Warlk



// sample code from ChatGPT
/* this didn't get me there:
$string = "Hello World";
$modifiedString = str_replace('o', '!', $string);

** neither did this
$string = "The quick brown fox jumps over the lazy dog";
$search = array("quick", "brown", "fox", "lazy", "dog");
$replace = array("slow", "black", "cat", "energetic", "wolf");

$modifiedString = str_replace($search, $replace, $string);

/* clarification of struggle I'm having with this code from php.net
// Outputs F because A is replaced with B, then B is replaced with C, and so on...
// Finally E is replaced with F, because of left to right replacements.
$search  = array('A', 'B', 'C', 'D', 'E');
$replace = array('B', 'C', 'D', 'E', 'F');
$subject = 'A';
echo str_replace($search, $replace, $subject); */



// ------------------------
/* from codewars - In this little assignment you are given a string of space separated numbers, 
and have to return the highest and lowest number.

Examples
highAndLow("1 2 3 4 5");  // return "5 1"
highAndLow("1 2 -3 4 5"); // return "5 -3"
highAndLow("1 9 3 4 -5"); // return "9 -5"
Notes
All numbers are valid Int32, no need to validate them.
There will always be at least one number in the input string.
Output string must be two numbers separated by a single space, and highest number is first. */

function highAndLow($numbers)
{
  $numberArray = explode(' ', $numbers);
  return max($numberArray) . " " . min($numberArray);
}
// it worked AND it was similar to BEST PRACTICE on codewars!


// From ChatGPT:
$numbers = [10, 5, 8, 20, 15];
$highestNumber = max($numbers);
echo "The highest number in the array is: " . $highestNumber;

$spaceSeparatedNumbers = "10 20 30 40 50";
$numbersArray = explode(' ', $spaceSeparatedNumbers);

//----------------------
/* Build a function that returns an array of integers from n to 1 where n>0.
Example : n=5 --> [5,4,3,2,1] */

function reverseSeq ($n) {
  $revarray = array();
  for ($i=$n; $i > 0; $i--) {
      $revarray[] = $i;
  }
  return $revarray;
}

// best practice code from codewars:
function reverseSeq1 ($n) {
  return range($n, 1);
};

// with a little help from ChatGPT

function descendingArray($n) {
  $resultArray = array();
  for ($i = $n; $i >= 1; $i--) {
      $resultArray[] = $i;
  }
  return $resultArray;
}


// ------------------------------
/* Given an array of ones and zeroes, convert the equivalent binary value to an integer.
Eg: [0, 0, 0, 1] is treated as 0001 which is the binary representation of 1.

Examples:
Testing: [0, 0, 0, 1] ==> 1
Testing: [0, 0, 1, 0] ==> 2
Testing: [0, 1, 0, 1] ==> 5
Testing: [1, 0, 0, 1] ==> 9
Testing: [0, 0, 1, 0] ==> 2
Testing: [0, 1, 1, 0] ==> 6
Testing: [1, 1, 1, 1] ==> 15
Testing: [1, 0, 1, 1] ==> 11 */

function binaryArrayToNumber($arr) {
  
  return bindec(implode($arr));
  }
// took me a while to figure out how to get rid of the commas to make actual binary form out of $arr!



// ---------------------------
/* from code wars - Complete the method that takes a boolean value and return a "Yes" string for true, or a "No" string for false. */
function boolToWord($bool){
 if ($bool) {
    return "Yes";
    } else {
    return "No";
    }
  }

// this is the best prcatice solution from codewars:
function boolToWord1(bool $b): string {
  return $b ? 'Yes' : 'No';
}
// from ChatGPT:
$isTrue = true;
if ($isTrue) {
    echo "It's true!";
} else {
    echo "It's false!";
}



/* from codewars - The first century spans from the year 1 up to and including the year 100, 
the second century - from the year 101 up to and including the year 200, etc.
Task - Given a year, return the century it is in. 

Examples
1705 --> 18
1900 --> 19
1601 --> 17
2000 --> 20 */

function centuryFromYear($year): int
{
  $century = ceil($year / 100);

    return $century;

  }



/*from ChatGPT more specific to pulling centuries from dates:
  then modified to assume intitial input is only year */
 
  function getCenturyFromDate($date) {
    // Extracting the year from the date
    $year = date('Y', strtotime($date));

    // Calculating the century -- NK: this is the only portion I needed
    $century = ceil($year / 100);

    return $century;
}



/* from codewars - Character recognition software is widely used to digitise printed texts. 
Thus the texts can be edited, searched and stored on a computer.
When documents (especially pretty old ones written with a typewriter),
 are digitised character recognition softwares often make mistakes.
Your task is correct the errors in the digitised text. You only have to handle the following mistakes:

S is misinterpreted as 5
O is misinterpreted as 0
I is misinterpreted as 1
The test cases contain numbers only by mistake.
*/

function correct($string) {
    $search = array('5', '0', '1');
    $replace = array('S', 'O', 'I');
    return(str_replace($search, $replace, $string));

}
// **** even better code pulled from codewars solutions:
/* function correct($string) {
    return str_replace(["5", "0", "1"], ["S", "O", "I"], $string);
  } */


/* Your classmates asked you to copy some paperwork for them. You know that there are 'n' classmates and 
the paperwork has 'm' pages. Your task is to calculate how many blank pages do you need. If n < 0 or m < 0 return 0.

Example:
n= 5, m=5: 25
n=-5, m=5:  0 */

function paperwork(int $n, int $m): int
{
  if ($n > 0 && $m > 0) {
    return $n * $m;
  } else {
    return 0;
  }
}

/* frome codewars - Write a program that finds the summation of every number from 1 to num. The number will always be a positive integer greater than 0. Your function only needs to return the result, what is shown between parentheses in the example below is how you reach that result and it's not part of it, see the sample tests.

For example (Input -> Output):
2 -> 3 (1 + 2)
8 -> 36 (1 + 2 + 3 + 4 + 5 + 6 + 7 + 8) */

function summation($num) {
    return array_sum(range(0,$num));
  }


/* from codewars - Write function RemoveExclamationMarks which removes all exclamation marks from a given string. */

function remove_exclamation_marks($string) {
 
	$res = str_replace('!', '', $string);

	return $res;
	}





/* from codewars - Can you find the needle in the haystack?

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