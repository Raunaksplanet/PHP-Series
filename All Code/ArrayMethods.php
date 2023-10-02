<?php

// Create an array of fruits
$fruits = ['apple', 'banana', 'cherry'];

// Count the number of elements in the $fruits array
$count = count($fruits);
echo "Count of fruits: $count<br><br>";

// Add elements to the $fruits array using array_push
$fruits = ['apple', 'banana'];
array_push($fruits, 'cherry', 'date');
echo "After array_push: ";
print_r($fruits);
echo "<br><br>";

// Remove the last element from the $fruits array using array_pop
$fruits = ['apple', 'banana', 'cherry'];
$lastFruit = array_pop($fruits);
echo "Popped fruit: $lastFruit<br><br>";
echo "Remaining fruits after array_pop: ";
print_r($fruits);
echo "<br><br>";

// Remove the first element from the $fruits array using array_shift
$fruits = ['apple', 'banana', 'cherry'];
$firstFruit = array_shift($fruits);
echo "Shifted fruit: $firstFruit<br><br>";
echo "Remaining fruits after array_shift: ";
print_r($fruits);
echo "<br><br>";

// Add elements to the beginning of the $fruits array using array_unshift
$fruits = ['banana', 'cherry'];
array_unshift($fruits, 'apple', 'date');
echo "After array_unshift: ";
print_r($fruits);
echo "<br><br>";

// Merge two arrays using array_merge
$fruits1 = ['apple', 'banana'];
$fruits2 = ['cherry', 'date'];
$mergedFruits = array_merge($fruits1, $fruits2);
echo "Merged fruits: ";
print_r($mergedFruits);
echo "<br><br>";

// Extract a slice of elements from the $fruits array using array_slice
$fruits = ['apple', 'banana', 'cherry', 'date'];
$slice = array_slice($fruits, 1, 2);
echo "Slice of fruits: ";
print_r($slice);
echo "<br><br>";

// Find the key/index of 'banana' in the $fruits array using array_search
$fruits = ['apple', 'banana', 'cherry'];
$key = array_search('banana', $fruits);
echo "Key of 'banana' in fruits: $key<br><br>";

// Check if 'banana' exists in the $fruits array using in_array
$fruits = ['apple', 'banana', 'cherry'];
$exists = in_array('banana', $fruits);
echo "Does 'banana' exist in fruits? " . ($exists ? 'Yes' : 'No') . "<br><br>";

// Reverse the order of elements in the $fruits array using array_reverse
$fruits = ['apple', 'banana', 'cherry'];
$reversedFruits = array_reverse($fruits);
echo "Reversed fruits: ";
print_r($reversedFruits);
echo "<br><br>";

// Sort an array in reverse order using rsort and print the result
$arr = [1, 2, 3, 4, 5];
rsort($arr);
echo "Sorted array in reverse order: ";
print_r(array_values($arr));
echo "<br><br>";

// Get a random key from the array using array_rand
$randomKey = array_rand($arr);
echo "Random key from array: $randomKey<br><br>";

// Iterate through the $arr array and echo each element
foreach ($arr as $count) {
    echo "$count<br><br>";
}

?>
