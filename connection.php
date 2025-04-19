<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

$servername="localhost";
$username="root";
$password="";
$db="tailor";


// Try connecting to the Database
$conn = mysqli_connect($servername,$username, $password, $db);

//Check the connection
if($conn==false){

    echo 'error';
}

?>