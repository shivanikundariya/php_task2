<?php
function countVowels($str)
{
    // Case-insensitive match for vowels
    preg_match_all("/[aeiou]/i", $str, $matches);
    return count($matches[0]);
}

// Driver code
$str = "GeeksforGeeks";
$vowelsCount = countVowels($str);

echo "Number of vowels: " . $vowelsCount;

?>