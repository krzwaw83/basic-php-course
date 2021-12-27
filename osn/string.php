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
echo '1) String in uppercase => ';
echo strtoupper($basicString);
echo '<br><br>';

/** Convert characters to lowercase */
echo 'String in lowercase => ';
echo strtolower($basicString);
echo '<br><br>';

/** Removes whitespace from the right end of a string */

echo '2) Removes whitespace from the right end of a string => ';
var_dump (rtrim($basicString));
echo '<br><br>';

/** Removes whitespace from the left and right side of a string */

echo '3) Removes whitespace from the left and right side of a string => ';
var_dump (trim($basicString));
echo '<br><br>';

/** Converts the first letter (not space) of a string to lowercase */

echo '4) Converts the first letter (not space) of a string to lowercase => ';
$basicString = ltrim($basicString); // Remove space from the beginning (left side)
var_dump (lcfirst($basicString));
echo '<br><br>';

/** Split a string into two strings, the second string must start with 9 */

echo '5) Split a string into two strings, the second string must start with 9 => ';
echo '<br><br>';
$basicString = str_replace(' ', '', $basicString);
$firstBasicString = substr($basicString, 0, 15);
$secondBasicString = strchr($basicString, "9");
echo 'First String =>' . $firstBasicString;
echo '<br><br>';
echo 'Second string start with 9 => ' . $secondBasicString;
echo '<br><br>';

/** Combine two strings into one */

echo '6) Combine two string into one => ';
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
echo '7) At the beginning of the string, add < h1 > , at the end of the string < /h1 > => ';
echo '<br><br>';
echo htmlspecialchars($prefix . $basicString . $suffix);
echo '<br><br>';

/** Complete the string to 50 characters long by adding "_" to the end */

echo '8) Complete the string to 50 characters long by adding "_" to the end => ';
echo str_pad($basicString, 82, "_", STR_PAD_RIGHT);
echo '<br><br>';


/** Complete the string to 50 characters long by adding "_" to the beginning */
echo '9) Complete the string to 50 characters long by adding "_" to the beginning => ';
echo str_pad($basicString, 82, "_", STR_PAD_LEFT);
echo '<br><br>';

/** Replace all occurrences of "A" with "@" */

echo '10) Replace all occurrences of "A" with "@" => ';
echo str_replace("A","@",$basicString);
echo '<br><br>';

/** Shuffle all characters in the string */

echo '11) Shuffle all characters in the string  => ';
echo str_shuffle($basicString);
echo '<br><br>';

/** Count the characters */

echo '12) Count the characters => ';
echo strlen($basicString);
echo '<br><br>';

/** Count words in string */

echo '13) Count words in string => ';
echo str_word_count($basicString);
echo '<br><br>';

/** Replace the string with a random string */

echo '14) Replace the string with a random string => ';
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
$search = 'qrtstyAwp12x';
$randomString = generateRandomString();
echo str_replace($search, $randomString, $basicString);
echo '<br><br>';

/** Replace a string with an array where each element is a single character */

echo '15) Replace a string with an array where each element is a single character => ';
$basicString = ' AbcdEfGhjiKLMNX9 qrtstyAwp12x  ';
$search = array("AbcdEfGhjiKLMNX9", "qrtstyAwp12x");
$replace = array('A', 'B');
echo str_replace($search, $replace, $basicString);
echo '<br><br>';

/** Rewrite the string in reverse order */

echo '16) Rewrite the string in reverse order => ';
echo strrev($basicString);
echo '<br><br>';

/** Where is "G" in the string ? (Which item number) */

echo '17) Where is "G" in the string ? (Which item number) => ';
$basicString = ' AbcdEfGhjiKLMNX9 qrtstyAwp12x  ';
$findme   = 'G';
$pos = strpos($basicString, $findme);

if ($pos === false) {
    echo "The string '$findme' was not found in the string '$basicString'";
} else {
    echo "The string '$findme' was found in the string '$basicString'";
    echo " and exists at position $pos";
}
echo '<br><br>';

/** Duplicate the string twice */

echo '18) Duplicate the string twice => ';
echo str_repeat($basicString, 2);
echo '<br><br>';

