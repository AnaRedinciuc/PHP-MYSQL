<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Readers";


$id=$_GET['id'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    #$sql = "DELETE FROM Books WHERE id=$id";

    $sql = "CALL DeleteBook('{$id}')";

    // use exec() because no results are returned
    $conn->exec($sql);
    header('Location: MyBooks.php');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>