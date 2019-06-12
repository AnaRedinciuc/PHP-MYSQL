<?php

include "conection.php";


if(isset($_POST['submit']))
{

session_start();

$titlu=$_POST['titlu'];
$autor=$_POST['autor'];
$id=$_GET['id'];

$sql = "UPDATE Books SET 'titlu'=:titlu, 'autor'=:autor WHERE 'id'=:id";
$stmt = $conn->prepare($sql); 
$stmt->bindValue(':titlu', $titlu, PDO::PARAM_STR);
$stmt->bindValue(':autor', $autor, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

if($stmt->execute()){
            header('location: MyBooks.php');
        }

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

}
?>