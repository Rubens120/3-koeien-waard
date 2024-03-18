<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Add New Book</h1>
    <form action="add_book.php" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br>
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required><br>
        <button type="submit">Add Book</button>
    </form>
</body>
</html>
