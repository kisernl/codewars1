<?php
echo "<h2> Jan 2024 </h2>";

echo "1/1/24";

/* from codewars - Given a non-empty array of integers, return the result of 
multiplying the values together in order. Example:
[1, 2, 3, 4] => 1 * 2 * 3 * 4 = 24 */

function grow($numbers) {
    $result = 1; 
    foreach ($numbers as $number) {
        $result *= $number; 
      } return $result;
    }
    

// --------------------
/* from codewars - Given an array of integers your solution should find the smallest integer.
For example:
Given [34, 15, 88, 2] your solution will return 2
Given [34, -345, -1, 100] your solution will return -345
You can assume, for the purpose of this kata, that the supplied array will not be empty. */

function smallestInteger ($arr) {
   return min($arr);
}
// got the match with best practice on codewars!

//from ChatGPT:
$numbers = array(4, 2, 8, 6, 3);
$lowest = min($numbers);


// ---------------
/* from codewars - Write a function to convert a name into initials. 
This kata strictly takes two words with one space in between them.
The output should be two capital letters with a dot separating them.
It should look like this:
Sam Harris => S.H
patrick feeney => P.F */

function abbrevName($name){
    $ucname = strtoupper($name);
    $nameArray = explode(" ", $ucname);
  return substr($nameArray[0], 0, 1) . "." . substr($nameArray[1], 0, 1);
}

/* from codewars - Check to see if a string has the same amount of 'x's and 'o's. 
The method must return a boolean and be case insensitive. The string can contain any char.

Examples input/output:

XO("ooxx") => true
XO("xooxx") => false
XO("ooxXm") => true
XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
XO("zzoo") => false */

function XO($s) {
    $lowercaseString = strtolower($s);
    $charx = "x";
    $charo = "o";
    $countx = substr_count($lowercaseString, $charx);
    $counto = substr_count($lowercaseString, $charo);
    if ($countx == $counto){
        return true;
    } else {
        return false;
    };
  }



/* from codewars - Consider an array/list of sheep where some sheep may be missing from their place. 
We need a function that counts the number of sheep present in the array (true means present).

For example,

[true,  true,  true,  false,
  true,  true,  true,  true ,
  true,  false, true,  false,
  true,  false, false, true ,
  true,  true,  true,  true ,
  false, false, true,  true]
The correct answer would be 17.

Hint: Don't forget to check for bad values like null/undefined */

// with some help from google:

function countSheep($arr) {
    return count(array_filter($arr));}

/* from codewars - Complete the function that accepts a string parameter, 
and reverses each word in the string. All spaces in the string should be retained.

Examples
"This is an example!" ==> "sihT si na !elpmaxe"
"double  spaces"      ==> "elbuod  secaps" */

function reverseWords($str) {
    $arr = explode(" ", $str);
    $revstr = strrev($arr);
    return $revstr;
  }
  
// alt

function reverseWords1($str) {
    $arrs = explode(" ", $str);
    $revstr = array_map(function ($arr) {
        return strrev($arr);
    }, $arrs);
    return implode(" ", $revstr);
  }

  // needed more help from ChatGPT - knew what i needed to do, just not the code to do it:
  function reverseWords2($str) {
    $words = explode(' ', $str); // Split the string into an array of words
    $reversedWords = array_map(function($word) {
        return strrev($word); // Reverse each word
    }, $words);
    return implode(' ', $reversedWords); // Join the reversed words back into a string
}

$input = "This is an example!";
$output = reverseWords($input);
echo $output; // Output: "sihT si na !elpmaxe"


  // from ChatGPT
$array = array(1, 2, 3, 4, 5);
$string = implode(", ", array_map('strval', $array));
echo $string; // Output: "1, 2, 3, 4, 5"

  

/* from cpdewars - You are given the length and width of a 4-sided polygon. 
The polygon can either be a rectangle or a square.
If it is a square, return its area. If it is a rectangle, return its perimeter.

Example(Input1, Input2 --> Output):
6, 10 --> 32
3, 3 --> 9
Note: for the purposes of this kata you will assume that it is a square if its length and width are equal, 
otherwise it is a rectangle. */

function areaOrPerimeter (int $l, int $w){
    if ($l == $w) {
        return $l * $w;
    } else {
        return ($l * 2) + ($w * 2);
    }
   }


/* from codewars - This time no story, no theory. The examples below show you how to write function accum:

Examples:
accum("abcd") -> "A-Bb-Ccc-Dddd"
accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt") -> "C-Ww-Aaa-Tttt"
The parameter of accum is a string which includes only letters from a..z and A..Z. */

// grabbed this best practice from the solution (it's pretty great):
function accum($s) {
    $parts = [];
    
    foreach (str_split($s) as $index => $part) {
      $parts[] = strtoupper($part) . str_repeat(strtolower($part), $index);
    }
    
    return implode('-', $parts);
}

//NEVER figured it out :(
    /* these are my notes on my failed attempt
function accum($s) {
    $result = '';
    $length = strlen($s);

    for ($i = 0; $i < $length; $i++) {
        $char = strtoupper($s[$i]);
        $repeat .= str_repeat($char, $i +1) . '-';
        $result = 

    }
    return rtrim($result, '-');
}

//From ChatGPT:
function transformString($str) {
    $result = '';
    $length = strlen($str);
    
    for ($i = 0; $i < $length; $i++) {
        $char = strtoupper($str[$i]); // Convert character to uppercase
        $result .= str_repeat($char, $i + 1) . '-'; // Repeat character based on position
    }
    
    return rtrim($result, '-'); // Remove the trailing dash
}

$input = "abcd";
$output = transformString($input);
echo $output;

$str = "Hello";
$excludingFirst = substr($str, 1); // Extracts characters starting from the second character
echo $excludingFirst; // Output: "ello"


// explode string to array (ChatGPT):
$string = "Hello,World,How,Are,You";
$array = explode(",", $string);
print_r($array);
*/

?>