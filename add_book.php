<?php
include 'Database.php';
// $db = new Database();

if(isset($_POST['title']) && isset($_POST['author']) && isset($_POST['genre'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];

    if($db->insertBook($title, $author, $genre)){
        echo "Book added successfully.";
    } else {
        echo "Error adding book.";
    }
}
?>
