<?php

class Controller{

    private $host ='localhost';
    private $user ='root';
    private $password = '';
    private $database = 'biebliotheek';

    public $con = null;

    public function __construct()
    {
        $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
        echo "Connection Successful...!";
        }
    }

    ///test