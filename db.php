<?php
$host="localhost";
$db="aut_system";
$user="root";
$pass="";

// pdo connection
try {
    //code...
    $pdo=new  PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    //throw $th;
    die("Could not connect to the database $db :" . $e->getMessage());
}
?>