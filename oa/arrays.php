<?php

/**
 * Use PHP documentation for the task.
 *
 * Display each operation on the screen.
 * Perform the operations on the numbers assigned to $basic variables .
 *
 * Hint: You can combine built-in PHP language functions.
 */

$array = []; //do not use array()
$strArray = ['one', 'two', 'three', 'four'];
$numArray = [1, 2, 3.00, 4];

var_dump('<pre>', $array, $strArray, $numArray, '</pre>');

//Follow the rest of the instructions

/** Print keys from $strArray and $numArray */

/** Print values from $strArray and $numArray */

/** Combine $strArray and $numArray. Expected: $array = ['one' => 1, 'two' => 2, 'three' => 3.00, 'four' => 4] (values from $strArray must changed to keys of $numArray) **/

/** Join the two arrays. Expected: $array = [0 => 'one', 1 => 'two', 2 => 'three', 3 => 'four', 4 => 1, 5 => 2, 6 => 3.00, 7 => 4] **/

/** Change values from $strArray to values of $numArray **/

/** Add element 'five' to array $numArray with key 'five'. Expected:  $numArray = [0 => 1, 1 => 2, 2 => 3.00, 3 => 4, 'five' => 'five']; **/

/** Move last element from prevoius array $numArray = [0 => 1, 1 => 2, 2 => 3.00, 3 => 4, 'five' => 'five']; to the beginning of array. Expected: $numArray = ['five' => 'five', 0 => 1, 1 => 2, 2 => 3.00, 3 => 4]; TIP: array_merge, array_splice **/

/** Change $array to two dimensional array with $strArray. Expected: $array = [0 => [0 => "one", 1 => "two", 2 => "three", 3 => "four"]]  **/

