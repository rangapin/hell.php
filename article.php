<?php

// Checking if the 'id' parameter is provided in the URL and is not empty
if (!isset($_GET["id"]) || empty($_GET["id"])) {
    // If 'id' is not provided or empty, redirect to the articles page
    header("Location: articles.php");
    exit;
}

// Extracting the 'id' from the URL
$id = $_GET["id"];

// Including the database connection file
require_once "includes/db.php";

// SQL query to select an article based on its ID
$sql = "SELECT * FROM `articles` WHERE `id` = :id";

// Binding the 'id' parameter to the query
$request->bindValue(":id", $id, PDO::PARAM_INT);

// Executing the SQL query
$request->execute();

// Fetching the article based on the provided ID
$article = $request->fetch();

// If no article is found with the provided ID, set HTTP response code to 404 and display a message
if (!$article) {
    http_response_code(404);
    echo "Article inexistant";
}

// Extracting the title of the article
$titre = strip_tags($article["title"]);

// Including the header file
include "includes/header.php";

// Including the navigation bar file
include "includes/navbar.php";

?>
<article>
    <h1>
        <?php echo strip_tags($article["title"]) ?>
    </h1>
    <p>Publié le: <?php echo ($article["created_at"]) ?></p>
    <div>
        <?php echo strip_tags($article["content"]) ?>
    </div>
</article>


<?php
// Including the footer file
include "includes/footer.php";
?>
