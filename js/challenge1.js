function secondLargest(array) {
    // Check if the array contains at least 2 elements
    if (array.length < 2) {
        return null;
    }

    // Check if all elements in the array are numbers
    for (let i = 0; i < array.length; i++) {
        if (typeof array[i] !== 'number' || isNaN(array[i])) {
            return null;
        }
    }

    // Sort the array in descending order
    array.sort(function(a, b) {
        return b - a;
    });

    // Return the second largest number
    return array[1];
}

// Example calls
console.log(secondLargest([10, 40, 30, 20, 50])); // Output: 40
console.log(secondLargest([25, 143, 89, 13, 105])); // Output: 105
console.log(secondLargest([54, 23, 11, 17, 10])); // Output: 23

// Check invalid input
console.log(secondLargest([10])); // Output: null
console.log(secondLargest([10, 'a', 30])); // Output: null
