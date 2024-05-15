<?php
// String Manipulation in PHP

$strings = ["Hello", "World", "PHP", "Programming"];


foreach ($strings as $string) {
    // Count vowel using foreach loop
    $vowelCount = 0;

    // Split string into array to use foreach method
    foreach (str_split($string) as $char) {

        $lowerChar = strtolower($char);
        
        if ($lowerChar === 'a' || $lowerChar === 'e' || $lowerChar === 'i' || $lowerChar === 'o' || $lowerChar === 'u') {
            $vowelCount++;
        }
    }
    
    // Reverse string using strrev method
    $reversedString = strrev($string);

    // Print output
    print("Original String: {$string}, Vowel Count: {$vowelCount}, Reversed String: {$reversedString}\n");
}


?>