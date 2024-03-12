<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form method="$_GET">
        <div>
            <label for="number1">Number 1:</label>
            <input type="number" id="number1" name="nb1">
        </div>
        <div>
            <label for="number2">Number 2:</label>
            <input type="number" id="number2" name="nb2">
        </div>
        <button type="submit">Calculate</button>
    </form>

    <?php 
        /*echo "<pre>";
        var_dump($GET['nb1']);
        echo "</pre>";*/

        $total = $_GET['nb1'] + $_GET['nb2'];
        echo $total;
    
    ?>
</body>
</html>