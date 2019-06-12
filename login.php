<?php
session_start();
 
require 'password.php';

require 'conection.php';
 
if(isset($_POST['email'])){
    
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $parola = !empty($_POST['parola']) ? trim($_POST['parola']) : null;
	echo $email;
	echo $parola;
    $sql="select uid, email, parola from Inregistrari where email='".$email."' AND parola='".$parola."' limit 1 ";
	$stmt = $conn->prepare($sql);
   
    $stmt->bindValue('$email', $email);
	$stmt->bindValue('$parola',$parola);
    
    $stmt->execute();
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user === false){
       
        die('Email sau parola incorecte!');
    } else{
        
        $validPassword = password_verify($parola, $user['parola']);
        
        if($parola == $user['parola']){
            $_SESSION['user_id'] = $user['uid'];
            header('Location: MyBooks.php');
            exit;
            
        } else{
            
            die('Email sau parola incorecte!');
        }
    }
}
?>

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
img{
	max-width: 100%;
	height: auto;
}


</style>

<body style="background-image:url('img2.jpeg')">



<ul>
  <li><a href="Acasa.php">Acasă</a></li>
  <li><a href="Contulmeu.php">Contul meu</a></li>
  <li><a href="Inregistrare.php">Înregistrare</a></li>
  <li style="float:right"><a href="Cumpara.php">Cumpara</a></li>
</ul>





</body>
</html>