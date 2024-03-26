<?php 

// Including the database connection file
require_once "includes/db.php";

// Including the header file
include "includes/header.php";

// Including the navigation bar file
include "includes/navbar.php";

?>

<p>Acceuil</p>

<?php  

// Variables to store username and password (these need to be populated with user input)
$username;
$password;

// SQL query to select user data based on username and password
$sql = "SELECT * FROM `users` WHERE `username` = :username AND `password` = :password";

// Binding the username and password values to the query
$request->bindValue(":username", $username, PDO::PARAM_STR);
$request->bindValue(":password", $password, PDO::PARAM_STR);

// Executing the query
$request->execute();

// Fetching the user data
$user = $request->fetchAll();

// Including the footer file
include "includes/footer.php";

?>
