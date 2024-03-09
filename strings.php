<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
</head>

<body>
    <?php

    $string = "This is a string of caracters";
    echo "<br>";
    echo $string;
    echo "<br>";

    // Display one caracter (zero index based)
    echo $string[1];
    echo "<br>";

    // Update a caracter
    $string[0] = "Z";

    // Extract a carater or string of caracters
    echo substr($string, 0, 4);
    echo "<br>";

    echo $string;
    echo "<br>";

    // Replace a caracter (case insensitive)
    echo str_replace('Zhis', 'Zhat', $string);
    echo "<br>";
    echo $string;
    echo "<br>";

    // Replace a caracter (case sensitive)
    echo str_ireplace('Zhis', 'Zhat', $string);
    echo "<br>";
    echo $string;

    //Other functions
    echo "<br>";
    echo str_contains($string, 'Zhis');

    echo "<br>";
    echo str_starts_with($string, 'Z');

    echo "<br>";
    echo str_ends_with($string, 's');

    ?>
</body>

</html>