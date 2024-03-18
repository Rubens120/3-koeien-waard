<?php
require 'dbconnectie.php';
require 'navbar.php';

$db = new Controller();
$books = $db->getAllBooks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Books gallary</h1>
    <div class="gallary">
        <?php foreach($books as $book);?>
            <div class="book-info">
                <h3><?php echo $book['titel']?></h3>
                <p><strong>Voorraad:</strong><?php echo $book['voorraad']?></p>
                <p><strong>ISBN Nummer:</strong><?php echo $book['ISBN']?></p>
                <p><strong>Auteur:</strong><?php echo $book['auteur']?></p>
            </div>
            
    </div>

    <table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Voorraad</th>
            <th>ISBN Nummer</th>
            <th>Auteur</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($books as $book): ?>
            <tr>
                <td><?php echo $book['titel']; ?></td>
                <td><?php echo $book['voorraad']; ?></td>
                <td><?php echo $book['ISBN']; ?></td>
                <td><?php echo $book['auteur']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</html>
