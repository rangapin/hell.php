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

