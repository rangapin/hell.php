<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numbers</title>
</head>
<body>
    <?php 
        $number_one = 79;
        $number_two = 19;

        //add
        $result = $number_one + $number_two;
        $result = ($number_one + $number_two) / 5;

        //substract
        $result = $number_one - $number_two;

        //multiply
        $result = $number_one * $number_two;

        //divide
        $result = $number_one / $number_two;

        //modulus - calculate the remainder - useful for countdown for instance - or multiplier of
        $result = $number_one % $number_two;

        //increment
        $number_one = $number_one + 1;
        $number_one += 1;
        $number_one++;
    
    ?>
</body>
</html>