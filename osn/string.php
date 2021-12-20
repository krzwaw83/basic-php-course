<?php
/**
 * Use PHP documentation for the task.
 *
 * Display each operation on the screen.
 * Perform the operations on the string assigned to $basicString .
 *
 * Hint: You can combine built-in PHP language functions.
 */

$basicString = ' AbcdEfGhjiKLMNX9 qrtstyAwp12x  ';
echo 'Basic string: ';
var_dump($basicString);
echo '<br><br>';


/** Convert characters to uppercase */
echo 'String in uppercase => ';
echo strtoupper($basicString);
echo '<br><br>';

/** Convert characters to lowercase */
echo 'String in lowercase => ';
echo strtolower($basicString);
echo '<br><br>';

/** Removes whitespace from the right end of a string */

echo 'Removes whitespace from the right end of a string => ';
var_dump (rtrim($basicString));
echo '<br><br>';

/** Removes whitespace from the left and right side of a string */

echo 'Removes whitespace from the left and right side of a string => ';
var_dump (trim($basicString));
echo '<br><br>';

/** Converts the first letter (not space) of a string to lowercase */

echo 'Converts the first letter (not space) of a string to lowercase => ';
$basicString = ltrim($basicString); // Remove space from the beginning (left side)
var_dump (lcfirst($basicString));
echo '<br><br>';

/** Split a string into two strings, the second string must start with 9 */

echo 'Split a string into two strings, the second string must start with 9 => ';
echo '<br><br>';
$basicString = str_replace(' ', '', $basicString);
$firstBasicString = substr($basicString, 0, 15);
$secondBasicString = strchr($basicString, "9");
echo 'First String =>' . $firstBasicString;
echo '<br><br>';
echo 'Second string start with 9 => ' . $secondBasicString;
echo '<br><br>';

/** Combine two strings into one */

echo 'Combine two string into one => ';
$a = 'StringOne';
$b = 'StringTwo';
$result = $a . $b;
echo '<br><br>';
echo 'First string =>' . ' ' . $a;
echo '<br><br>';
echo 'Second string =>' . ' ' . $b;
echo '<br><br>';
echo 'Two strings into one =>' . ' ' . $result;
echo '<br><br>';


/** At the beginning of the string, add <h1>, at the end of the string </h1> */

$basicString = ' AbcdEfGhjiKLMNX9 qrtstyAwp12x  ';
$prefix = "<h1>";
$suffix = "</h1>";
echo 'At the beginning of the string, add < h1 > , at the end of the string < /h1 > => ';
echo '<br><br>';
echo htmlspecialchars($prefix . $basicString . $suffix);
echo '<br><br>';

/** Complete the string to 50 characters long by adding "_" to the end */

echo 'Complete the string to 50 characters long by adding "_" to the end => ';
echo str_pad($basicString, 82, "_", STR_PAD_RIGHT);
echo '<br><br>';


/** Complete the string to 50 characters long by adding "_" to the beginning */
echo 'Complete the string to 50 characters long by adding "_" to the beginning => ';
echo str_pad($basicString, 82, "_", STR_PAD_LEFT);
echo '<br><br>';

/** Replace all occurrences of "A" with "@" */

/** Shuffle all characters in the string */

/** Count the characters */

/** Count words in string */

/** Replace the string with a random string */

/** Replace a string with an array where each element is a single character */

/** Rewrite the string in reverse order */

/** Where is "G" in the string ? (Which item number) */

/** Duplicate the string twice */
