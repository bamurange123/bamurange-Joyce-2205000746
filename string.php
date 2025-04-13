<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$sentence = "The main body of a book";

// i) Convert to lowercase and uppercase
$lowercase = strtolower($sentence);
$uppercase = strtoupper($sentence);

// ii) Replace "book" with "a college"
$replaced = str_replace("book", "a college", $sentence);

// iii) Calculate the length of $sentence
$length = strlen($sentence);

// iv) Display character at a specific position (e.g., character at position 5)
$position = 5; // you can change this value
$character = $sentence[$position];

// Output results
echo "Original sentence: $sentence\n";
echo "Lowercase: $lowercase\n";
echo "Uppercase: $uppercase\n";
echo "Replaced: $replaced\n";
echo "Length: $length\n";
echo "Character at position $position: $character\n";
?>
    
</body>
</html>