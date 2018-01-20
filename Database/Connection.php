

<?php

 class Database
 {

     function Connect()
     {

         $connection = mysqli_connect("localhost","root","root","security");
            if($connection==null)
                die("Connection problem");

         return $connection;

     }

 }

$data = new Database();



?>
