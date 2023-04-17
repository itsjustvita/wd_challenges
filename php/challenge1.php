<?php
function secondLargest($array) {
    // Check if the array contains at least 2 elements
    if (count($array) < 2) {
        return null;
    }

    // Check if all elements in the array are numbers
    foreach ($array as $a) {
        if (!is_numeric($a)) {
            return null;
        }
    }

    /* Sort the array in descending order
    /* check https://www.php.net/manual/de/function.rsort.php */
    rsort($array);

    // Return the second largest number
    return $array[1];
}

// Test Calls
echo secondLargest([10, 40, 30, 20, 50]); // Output: 40
echo secondLargest([25, 143, 89, 13, 105]); // Output: 105
echo secondLargest([54, 23, 11, 17, 10]); // Output: 23

// Test invalid calls
echo secondLargest([10]); // Output: null
echo secondLargest([10, 'a', 30]); // Output: null





?>