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
echo '<pre>';
echo 'Keys from $strArray : ';
    print_r(array_keys($strArray));
echo '<br><br>';
echo 'Keys from $numArray : ';
    print_r(array_keys($numArray));
echo '<br><br>';

/** Print values from $strArray and $numArray */


echo 'Values from $strArray : ';
    print_r (array_values($strArray));
echo '<br><br>';
echo 'Values from $numArray : ';
    print_r(array_values($numArray));
echo '<br><br>';

/** Combine $strArray and $numArray. Expected: $array = ['one' => 1, 'two' => 2, 'three' => 3.00, 'four' => 4] (values from $strArray must changed to keys of $numArray) **/

echo 'Combine $strArray and $numArray : ';
    var_dump(array_combine($strArray, $numArray));
echo '<br><br>';

/** Join the two arrays. Expected: $array = [0 => 'one', 1 => 'two', 2 => 'three', 3 => 'four', 4 => 1, 5 => 2, 6 => 3.00, 7 => 4] **/

echo 'Join the two arrays : ' ;
    var_dump(array_merge($strArray, $numArray));
echo '<br><br>';

/** Change values from $strArray to values of $numArray **/

echo 'Change values from $strArray to values of $numArray : ' ;
    print_r(array_replace($strArray, $numArray));
echo '<br><br>';

/** Add element 'five' to array $numArray with key 'five'. Expected:  $numArray = [0 => 1, 1 => 2, 2 => 3.00, 3 => 4, 'five' => 'five']; **/

echo 'Add specific element to array $numArray : ';
$numArray['five']='five';
    print_r($numArray);

/** Move last element from prevoius array $numArray = [0 => 1, 1 => 2, 2 => 3.00, 3 => 4, 'five' => 'five']; to the beginning of array. Expected: $numArray = ['five' => 'five', 0 => 1, 1 => 2, 2 => 3.00, 3 => 4]; TIP: array_merge, array_splice **/

echo 'Move last element from prevoius array $numArray to the beginning of array : ';
$numArray = array_merge(array_splice($numArray, -1), $numArray);
    print_r($numArray);


/** Change $array to two dimensional array with $strArray. Expected: $array = [0 => [0 => "one", 1 => "two", 2 => "three", 3 => "four"]]  **/

$array = [$strArray];
    print_r($array);
