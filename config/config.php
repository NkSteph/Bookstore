<?php

// echo "BOOKSTORE";

$host = "localhost";

$dbname = "bookstore";

$user = "root";

$pass = "";

$conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo "<br>";
// if($conn){
//     echo "DB is a success";
//     echo "<script>alert('it works')</script>";
// }else{
//     echo "DB failed";
// }

?>