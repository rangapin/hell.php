<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdo-crud</title>
</head>

<body>
    <?php

    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBNAME", "newTech");

    //connection
    try {
        //instantiate PDO
        $db = new PDO($dsn, DBUSER, DBPASS);
        //send UTF8 data
        $db->exec("SET NAMES utf8");
    } catch (PDOException $e) {
        die("Erreur:" . $e->getMessage());
    }

    //we are commected

    //fetch a user
    $SQL = "SELECT * FROM `users` WHERE `id` = 1";

    //execute query
    $query = $db->query($SQL);

    //create a user
    $SQL = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (`richard`, `test@gmail.com`, `qwerty`)";

    //execute query
    $query = $db->query($SQL);

    //update a user
    $SQL = "UPDATE `users` SET `name` = `abdula` WHERE `id` = 1";

    //execute query
    $query = $db->query($SQL);

    //delete a user
    $SQL = "DELETE FROM `users` WHERE `id` < 2";

    //execute query
    $query = $db->query($SQL);

    ?>
</body>

</html>