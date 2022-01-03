<?php

/**
 * Use PHP documentation for the task.
 *
 * Display each operation on the screen.
 * Perform the operations on the numbers assigned to $basic variables .
 *
 * Hint: You can combine built-in PHP language functions.
 */

$basicNumber = 123456;
$basicFloat  = 123.456;

echo 'Basic number: ';
var_dump($basicNumber);
echo '<br><br>';

echo 'Basic number float: ';
var_dump($basicFloat);
echo '<br><br>';

/** Generate random number */
echo rand();
echo '<br><br>';

//Follow the rest of the instructions

/** Increment $basicNumber by 1 */

echo 'Basic number increment by 1 : ';
$basicNumber++;
echo $basicNumber;
echo '<br><br>';


/** Decrement $basicNumber by 1 */

echo 'Basic number decrement by 1 : ';

$basicNumber = 123456;
$basicNumber--;
echo $basicNumber;
echo '<br><br>';

/** Convert $basicNumber to a floating point number with two decimal places - expected 123456.00 */

echo 'Convert $basicNumber to a floating point number with two decimal places :';
$basicNumber = 123456;
echo number_format((float)$basicNumber, 2, '.', '');
echo '<br><br>';

/** Convert $basicFloat to integer */

echo 'Convert $basicFloat to integer  :';
echo intval($basicFloat);
echo '<br><br>';


/** Convert $basicFloat to boolean */

echo 'Convert $basicFloat to boolean  :';
echo boolval($basicFloat);
echo '<br><br>';

/** Converts $basicFloat to a floating point number with two decimal places - expected: 123.45 */

/** Converts $basicFloat to a floating point number with two decimal places - expected: 123.46 */

/** Sum $basicFloat and $basicNumber */

/** Do: $basicFloat - $basicNumber. Show results as a positive number */

/** Pre-Increment $basicNumber (operator ++) */

/** Pre-Decrement $basicFloat */

/** Post-Increment $basicNumber */

/** Post-Decrement $basicFloat */

/** Raise a $basicNumber to the power of two (a^2 - but do not use ^) */

/**  Round fractions of $basicFloat down. Expected: 123 */

/**  Round fractions of $basicFloat up. Expected: 124 */