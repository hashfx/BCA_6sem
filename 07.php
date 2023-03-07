<!-- demonstrate any 5 string functions -->

<?php
// strlen(): returns the length of a string.
$myString = "Hello World";
echo strlen($myString) . "<br />"; // Outputs: 11

// substr(): extracts a substring from a string.
$myString = "Hello World";
echo substr($myString, 0, 5) . "<br />"; // Outputs: Hello

// str_replace(): replaces all occurrences of a search string with a replacement string.
$myString = "Hello World";
echo str_replace("World", "PHP", $myString) . "<br />"; // Outputs: Hello PHP

// strtolower(): converts a string to lowercase.
$myString = "Hello World";
echo strtolower($myString) . "<br />"; // Outputs: hello world

// strrev(): reverses a string.
$myString = "Hello World";
echo strrev($myString) . "<br />"; // Outputs: dlroW olleH

?>