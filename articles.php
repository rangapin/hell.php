<?php

// Including the database connection file
require_once "includes/db.php";

// SQL query to select all articles ordered by creation date in descending order
$sql = "SELECT * FROM `articles` ORDER BY `created_at` DESC";

// Executing the SQL query
$request = $db->query($sql);

// Fetching all articles from the database
$articles = $request->fetchAll();

// Including the header file
include "includes/header.php";

// Including the navigation bar file
include "includes/navbar.php";

?>

<p>Articles</p>

<?php foreach ($articles as $article) : ?>
    <section>
        <article>

            <h1>
                <?php echo strip_tags($article["title"]) ?>
            </h1>
            <p>Publié le: <?php echo ($article["created_at"]) ?></p>
            <div>
                <?php echo strip_tags($article["content"]) ?>
            </div>
        </article>
    </section>
<?php endforeach ?>

<?php
// Including the footer file
include "includes/footer.php";
?>
