<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>
    <?php 
    
    function add($number1, $number2){
        echo $number1 + $number2;
    }

    $total = add(2, 2);
    echo $total;

    function greet($name, $surname){
        echo "Hi, $name $surname";
    }

    greet("Richard", "A");
    
    ?>
</body>
</html>