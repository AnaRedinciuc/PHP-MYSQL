<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE Readers";
    $conn->exec($sql);
$conn=null;

$conn = new PDO("mysql:host=$servername;dbname=Readers", $username, $password);

$sql = "CREATE TABLE Inregistrari (

    uid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    Nume VARCHAR(30) NOT NULL,
    Prenume VARCHAR(30) NOT NULL,
    Email VARCHAR(50),
   Parola VARCHAR(50)
    )";

    // use exec() because no results are returned
    $conn->exec($sql);


$sql = "CREATE TABLE Books (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    uid INT(6) NOT NULL,
    Titlu VARCHAR(30) NOT NULL,
    Autor VARCHAR(30) NOT NULL
    )";

    // use exec() because no results are returned
    $conn->exec($sql);

#Procedures

$sql1="DROP PROCEDURE IF EXISTS AddNewBook";
$sql2="CREATE PROCEDURE AddNewBook(
IN UserID INT,
IN BookTitle VARCHAR(200),
IN BookAuthor VARCHAR(200)
)
BEGIN
INSERT INTO Books(uid, Titlu, Autor) VALUES (UserID, BookTitle, BookAuthor);
END;
";

$conn->exec($sql1);
$conn->exec($sql2);


$sql1="DROP PROCEDURE IF EXISTS DeleteBook";
$sql2="CREATE PROCEDURE DeleteBook(
IN bookID INT
)
BEGIN
DELETE FROM Books  WHERE id=bookID;
END;
";

$conn->exec($sql1);
$conn->exec($sql2);


$sql1="DROP PROCEDURE IF EXISTS UpdateBook";
$sql2="CREATE PROCEDURE UpdateBook(
IN NewTitle VARCHAR(200),
IN NewAuthor VARCHAR(200),
IN BookID INT
)
BEGIN
UPDATE Books  SET autor=NewAuthor, titlu=NewTitle WHERE id=BookID;
END;
";

$conn->exec($sql1);
$conn->exec($sql2);



$sql1="DROP PROCEDURE IF EXISTS UpdateBook";
$sql2="CREATE PROCEDURE UpdateBook(
IN NewTitle VARCHAR(200),
IN NewAuthor VARCHAR(200),
IN BookID INT
)
BEGIN
UPDATE Books  SET autor=NewAuthor, titlu=NewTitle WHERE id=BookID;
END;
";

$conn->exec($sql1);
$conn->exec($sql2);

#Triggers
$sql1="DROP TRIGGER Update_Book";
$sql2="CREATE TRIGGER Update_Book BEFORE UPDATE ON Books FOR EACH ROW
BEGIN
SET New.titlu=CONCAT(UCASE(LEFT(New.titlu,1)),
SUBSTRING(New.titlu,2));
SET New.autor=CONCAT(UCASE(LEFT(New.autor,1)),
SUBSTRING(New.autor,2));
END;
";

$conn->exec($sql1);
$conn->exec($sql2);

$sql1="DROP TRIGGER UpperCase_Insert";
$sql2="CREATE TRIGGER UpperCase_Insert BEFORE INSERT ON Books FOR EACH ROW
BEGIN
SET New.titlu=CONCAT(UCASE(LEFT(New.titlu,1)),
SUBSTRING(New.titlu,2));
SET New.autor=CONCAT(UCASE(LEFT(New.autor,1)),
SUBSTRING(New.autor,2));
END;
";

$conn->exec($sql1);
$conn->exec($sql2);

$sql1="DROP TRIGGER Upper_NewUser";
$sql2="CREATE TRIGGER Upper_NewUser BEFORE INSERT ON Inregistrari FOR EACH ROW
BEGIN
SET New.nume=CONCAT(UCASE(LEFT(New.nume,1)),
SUBSTRING(New.nume,2));
SET New.prenume=CONCAT(UCASE(LEFT(New.prenume,1)),
SUBSTRING(New.prenume,2));
END;
";

$conn->exec($sql1);
$conn->exec($sql2);




    }
catch(PDOException $e)
    {
    #echo $sql . "<br>" . $e->getMessage();
    }



$conn = null;
?>



