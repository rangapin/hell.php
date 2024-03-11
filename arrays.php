<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays</title>
</head>

<body>
    <?php
    //declare an array
    $arr = [];

    //add a value at the end
    $arr = [1, true, 12.34, "Rich", false, "PHP", 23];
    array_push($arr, "end");

    //add a value at the beginning
    array_unshift($arr, "start");

    //delete a value at the end
    array_pop($arr);

    //delete a value at the beginning
    array_shift($arr);

    //associative arrays
    $arr_assoc = [
        "name" => "Rich",
        "surname" => "Ard"
    ];

    //multidimentional arrays
    $arr_multi = [
        "Richard" => [
            "name" => "Richard",
            "lastName" => "Angapin",
            "age" => "20"
        ],

        "Anna" => [
            "name" => "Anna",
            "lastName" => "Angapin",
            "age" => "19"
        ]
        ];

    echo $arr_multi["Anna"]["name"];

    ?>

</body>

</html>