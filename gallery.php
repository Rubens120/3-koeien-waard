<?php
include 'Database.php';
$db = new Database();
$books = $db->getAllBooks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Gallery</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Book Gallery</h1>
    <div class="gallery">
        <?php foreach($books as $book): ?>
            <div class="book">
                <h3><?php echo $book['title']; ?></h3>
                <p><strong>Author:</strong> <?php echo $book['author']; ?></p>
                <p><strong>Genre:</strong> <?php echo $book['genre']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
