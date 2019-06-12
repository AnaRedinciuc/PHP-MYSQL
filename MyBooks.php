<!DOCTYPE HTML>
<html>
<head>
<title>FOR REAL READERS</title>
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


<h4>Acestea sunt cărțile pe care le-ai citit!</h4>

<div align="center" style="min-width: 1000px;">

<table>
  <thead>
    <tr>
       <th>Titlu</th>
      <th>Autor</th>
      <th>Actiune</th>
    </tr>
  </thead>

<tbody>

<?php

  include "conection.php";
  session_start();
  $uid=$_SESSION['user_id'];

  $sql="SELECT id,titlu,autor FROM Books WHERE uid=$uid";
  $stmt=$conn->prepare($sql);
  $stmt->execute();

  $results=$stmt->fetchall(PDO::FETCH_OBJ);

  foreach($results as $result)
  {
  ?>
  <tr>
    <!--<td><?php echo $result->id;?></td>-->
    <td><?php echo $result->titlu;?></td>
    <td><?php echo $result->autor;?></td>
    <td>
        <a href="EditBook.php?id=<?php echo $result->id;?>">Editeaza</a>
        <a href="DeleteBook.php?id=<?php echo $result->id;?>">Sterge</a>  
    </td>
    
  </tr>
 <?php } ?>

  
  </tbody>
</table>

</div>

<div>
<form method="post" action="AddBook.php">
<input type="submit" value="Adaugă o carte">
</form>
</div>

</body>
</html>