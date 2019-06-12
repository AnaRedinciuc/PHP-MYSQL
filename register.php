<?php

$servername = "localhost";
$username = "root";
$password = "";


$Nume=$_POST['nume'];
$Prenume=$_POST['prenume'];
$Email=$_POST['email'];
$Parola=$_POST['parola'];	


try {
    $conn = new PDO("mysql:host=$servername;dbname=Readers", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Inregistrari (Nume, Prenume, Email, Parola)
    VALUES ('$Nume', '$Prenume', '$Email', '$Parola')";
    // use exec() because no results are returned
    $conn->exec($sql);
   header('location:Contulmeu.php');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


	
?>


<html>
<head>
<title>Page Title</title>
</head>
<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #E6CC90;
  opacity:0.9;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  font-weight: bold;
  font-size: 20px;
  text-align: center;
  padding:20px 30px;
  text-decoration: none;
}

li a:hover {
  background-color: #F3B956;
}

table{
	
	 background-color:#E6CC90;
	 weight:20px;
	 margin:50px 50px;
	 text-align:center;
	 padding:15px 15px;
	 opacity:0.9;
	 width:50%;
}
th,td{
	border:1px black;
}
 h4{
	 border:1px solid black;
	 background-color:#E6CC90;
	 weight:20px;
	 margin:50px;
	 text-align:center;
	 padding:15px 15px;
	 opacity:0.9;
	
 }
input[type=text], select {
	
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size:20pt;
}


input[type=submit] {
	font-weight: bold;
  width: 100%;
  background-color: #44C126;
  opacity:0.9;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

div {
  margin:20px auto;
  width:320px;
  height:auto;
  align:center;
}

</style>

<body style="background-image:url('img2.jpeg')">



<ul>
  <li><a href="Acasa.php">Acasă</a></li>
  <li><a href="Contulmeu.php">Contul meu</a></li>
  <li><a href="Inregistrare.php">Înregistrare</a></li>
  <li style="float:right"><a href="Cumpara.php">Cumpara</a></li>
</ul>




<h4>Bine ai venit! În acest tabel vom ține evidența cărților pe care le-ai citit!</h4>

<table align="center">
  
  <tr>
    <th>Titul cărții</th>
    <th>Autorul</th>
  </tr>
</table>


<div>
<form action="AddBook.php">
<input type="submit" value="Adaugă o carte">
</form>
</div>

</body>
</html>