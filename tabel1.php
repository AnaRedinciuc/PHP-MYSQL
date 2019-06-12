<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Readers";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE Inregistrari (
    uid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    Nume VARCHAR(30) NOT NULL,
    Prenume VARCHAR(30) NOT NULL,
    Email VARCHAR(50),
   Parola VARCHAR(50)
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>