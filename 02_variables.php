<?php

// Declare variables
$name ='Mohammad Ali Shuvo';
$age =23;
$height= 1.85;
$isMale = true;
$salery = null;

// Print the variables. Explain what is concatenation
echo$name.'<br>';
echo$age.'<br>';
echo$height.'<br>';
echo$isMale.'<br>';
echo$salery.'<br>';
// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($height).'<br>';
echo gettype($isMale).'<br>';
echo gettype($salery).'<br>';


// Print the whole variable
 var_dump($name, $age, $isMale, $salery,$height); //very useful in array
// Change the value of the variable
echo '<br>';
$name = false;

// Print type of the variable
echo gettype($name).'<br>';

// Variable checking functions
/*
 is_string($age).'<br>'; //true
is_int($age).'<br>';//true
is_bool($height).'<br>';
is_float($age).'<br>';//false
*/

// Check if variable is defined
/*
isset($name);
*/

// Constants
define('PI',3.14);
echo PI.'<br>';

// Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';
