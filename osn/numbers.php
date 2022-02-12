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
var_dump((float)number_format($basicNumber, 2, '.', ''));
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

echo 'Converts $basicFloat to a floating point number with two decimal places - expected: 123.45  :';
var_dump(floor(round($basicFloat,2)));
echo '<br><br>';

/** Converts $basicFloat to a floating point number with two decimal places - expected: 123.46 */

echo 'Converts $basicFloat to a floating point number with two decimal places - expected: 123.46  :';
var_dump(round($basicFloat,2));
echo '<br><br>';

/** Sum $basicFloat and $basicNumber */

echo 'Sum $basicFloat and $basicNumber  :';
$sum = $basicFloat + $basicNumber;
echo $sum;
echo '<br><br>';

/** Do: $basicFloat - $basicNumber. Show results as a positive number */

echo 'Sum $basicFloat and $basicNumber  :';
$subtraction = abs($basicFloat - $basicNumber);
echo $subtraction;
echo '<br><br>';

/** Pre-Increment $basicNumber (operator ++) */

echo 'Pre-Increment $basicNumber (operator ++)  :';
echo " Should be 123457: " . ++$basicNumber . "<br />\n";

/** Pre-Decrement $basicFloat */

$basicFloat  = 123.456;
echo 'Pre-Decrement $basicFloat  :';
echo " Should be 122.456 : " . --$basicFloat . "<br />\n";

/** Post-Increment $basicNumber */

echo 'Post-Increment $basicNumber  :';
$basicNumber = 123456;
echo " First should be (123456) : " . $basicNumber++ . " then should be (123457) : " . $basicNumber . "<br />\n";

/** Post-Decrement $basicFloat */

echo 'Post-Decrement $basicFloat  :';
$basicFloat  = 123.456;
echo " First should be (123.456) : " . $basicFloat-- . " then should be (122.456) : " . $basicFloat . "<br />\n";

/** Raise a $basicNumber to the power of two (a^2 - but do not use ^) */

echo 'Raise a $basicNumber to the power of two (a^2 - but do not use ^)  :';
$basicNumber = 123456;
echo pow($basicNumber, 2);
echo '<br><br>';

/**  Round fractions of $basicFloat down. Expected: 123 */

$basicFloat  = 123.456;
echo "Round fractions of $ basicFloat down. Expected: 123 -> ";
var_dump(floor($basicFloat));
echo '<br><br>';

/**  Round fractions of $basicFloat up. Expected: 124 */

$basicFloat  = 123.456;
echo "Round fractions of $ basicFloat up. Expected: 124 -> ";
var_dump(ceil($basicFloat));
echo '<br><br>';