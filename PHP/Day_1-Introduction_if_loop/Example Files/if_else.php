<?php

//1. IF Syntax
$a = 5;

if ($a == 6) {
    echo 'Equal';
} else {
    echo 'Not equal';
}

//2. Compare Operators
$var1 = 2;
$var2 = '2';

// Same value
if($var1 == $var2)

// Same Value & Same Type
if($var1 === $var2)

// Not equal / Not same value
if($var1 != $var2)

// Not same value OR not same type
if($var1 !== $var2)

// Greater / lower than :
if($var < $var2)
if($var <= $var2)
if($var > $var2)
if($var >= $var2)

// 3. Logical Operator

// AND &&
if($var1== 5 && $var2 == 3)
if($var1== 5 AND $var2 == 3)


// OR ||
if($var1== 5 || $var2 == 3)
if($var1== 5 OR $var2 == 3)



$a = 5;
$b = 2;

if($a >9 || $b > 9)