<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditions-ope</title>
</head>
<body>
    <?php 

    //ask a question
    $variable = 97;
    //compare ==, ===, <, <=, >, =>, <=>, !=, !==
    if ($variable == 974) {
    //do
    echo "Inferior to";
    }else {
    // otherwise
    echo "Superior to";
    }
    echo "<br>";
    
    $a = 1;
    $b = 2;

    switch($a <=> $b){
        case -1:
            echo "a is inferior to b";
            break;
        case 0:
            echo "a is equal to b";
            break;
        case 1:
            echo "a is superior to b";
            break;
    }
    ?>
</body>
</html>