
<!DOCTYPE html>
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
input[type=text], select {
	
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
	font-weight: bold;
  width: 100%;
  background-color: #567213;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #779928;
}

div {
  border-radius: 5px;
  margin:20px auto;
  width:320px;
  height:auto;
  background-color: #E6CC90;
  padding:20px;
  opacity:0.9;
  align:left;
}



</style>

<body style="background-image:url('img2.jpeg')">


<ul>
  <li><a href="Acasa.php">Acasă</a></li>
  <li><a href="Contulmeu.php">Contul meu</a></li>
  <li><a href="Inregistrare.php">Înregistrare</a></li>
  <li style="float:right"><a href="Cumpara.php">Cumpara</a></li>
</ul>

<div>
  <form action="login.php" method="post">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" placeholder="Adresa de email.." required="required">

     <label for="parola">Parola:</label>
    <input type="text" id="parola" name="parola" placeholder="Parola.." required="required">

  
    <input type="submit" value="Intră în cont">
  </form>
</div>


</body>
</html>