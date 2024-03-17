<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop</title>
</head>
<body>
    <?php 

    //for loop for 0 to 10
    for($i = 0; $i <= 10; $i++){
        echo "<p>$i</p>";
    }

    echo "<br>";

    //foreach loop through array
    $divers = [
        "one" => [
            "name" => "John",
            "surname" => "Doe"
        ],
        "two" => [
            "name" => "Julius",
            "surname" => "Cesar"
        ]
        ];
    
        foreach($divers as $diver) {
            echo "<br>";
            echo $diver["name"];
        }
    ?>
</body>
</html>