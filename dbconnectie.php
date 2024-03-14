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