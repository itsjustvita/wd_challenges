<?php

function letterAtPosition($number) {
    // Define a lookup table for the letters of the alphabet
    // siehe: https://www.php.net/manual/de/function.range
    $alphabet = range('a', 'z');

    // Check if the input is a valid number between 1 and 26
    if (!is_numeric($number) || $number < 1 || $number > 26 || $number != (int)$number) {
        return 'invalid';
    }

    // Get the letter at the corresponding index in the lookup table
    return $alphabet[$number-1];
}

// Example calls
echo letterAtPosition(1); // Output: a
echo letterAtPosition(26.0); // Output: z
echo letterAtPosition(0); // Output: invalid
echo letterAtPosition(4.5); // Output: invalid
