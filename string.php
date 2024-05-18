<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count vowels
    $vowelCount = 0;
    $lowercaseString = strtolower($string);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    foreach ($vowels as $vowel) {
        $vowelCount += substr_count($lowercaseString, $vowel);
    }

    // Reverse string
    $reversedString = strrev($string);

    // Output
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

