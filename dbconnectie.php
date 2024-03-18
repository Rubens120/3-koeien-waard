<?php

class Controller{

    private $host ='localhost';
    private $user ='root';
    private $password = '';
    private $database = 'bibliotheek';

    public $con = null;

    public function __construct()
    {
        $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
        echo "Connection Successful...!";
        }

        //Fetch alle boeken

    public function getAllBooks(){
        $books = array();
        $query = "SELECT * FROM boeken";
        $result = $this->con->query($query);
        if ($result->num_rows >0) {
            while($row = $result->fetch_assoc()){
                $books[] = $row;
                
            }
        }
        return $books;
    }
}
//     <?php


//     public function getEmployees()
//     {
//         $query = "SELECT * FROM employees";
//         $result = mysqli_query($this->con, $query);
//         $employees = [];
//         while ($row = mysqli_fetch_assoc($result)) {
//             $employees[] = $row;
//         }
//         return $employees;
//     }

// Instantiate the Controller class
// $controller = new Controller();

//          Fetch employees data
//           $employees = $controller->getEmployees();
//            foreach ($employees as $employee) {
//               echo "<tr>";
//               echo "<td>{$employee['Name']}</td>";
//               echo "<td>{$employee['Position']}</td>";
//               echo "<td>{$employee['Office']}</td>";
//              echo "<td>{$employee['Age']}</td>";
//        echo "<td>{$employee['Start date']}</td>";
//               echo "<td>{$employee['Salary']}</td>";
//            echo "</tr>";
//                 }
//                 ?>