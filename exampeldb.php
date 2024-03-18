<?php
class Database {
    private $host = "localhost";
    private $username = "your_username";
    private $password = "your_password";
    private $database = "your_database";
    public $conn;

    // Constructor
    public function __construct(){
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if($this->conn->connect_error){
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Insert a new book into the database
    public function insertBook($title, $author, $genre){
        $sql = "INSERT INTO books (title, author, genre) VALUES ('$title', '$author', '$genre')";
        if($this->conn->query($sql) === TRUE){
            return true;
        } else {
            return false;
        }
    }

    // Fetch all books from the database
    public function getAllBooks(){
        $sql = "SELECT * FROM books";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
}
?>
