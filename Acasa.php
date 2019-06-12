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
  
  font-size:14pt;
}

</style>

<body style="background-image:url('img2.jpeg')">


<ul>
  <li><a href="Acasa.php">Acasă</a></li>
  <li><a href="Contulmeu.php">Contul meu</a></li>
  <li><a href="Inregistrare.php">Înregistrare</a></li>
  <li style="float:right"><a href="Cumpara.php">Cumpara</a></li>
</ul>


<form>
  <table style="border: 1px solid black">
    <tr>
      <td><?php echo "Salut! Deci îți place lectura! Ai nimerit unde trebuie :) Aici poți ține evidența cărților pe care le-ai citit până în prezent. Tot ce trebuie să faci este să te înregistrezi și sa începi să adaugi pe pagina contului tău tot ce ai citit.";?> </td>
   </tr>
   <tr>
      <td><?php echo "Vei observa că în colțul din stânga există un tab pe care daca îl vei accesa, vei găsi câteva site-uri foarte bune de unde poți cumpăra cărțile care te interesează. Te invit să arunci o privire și acolo :)
      " ;?></td>
 </tr>
 <tr>
  <td>
    <img src="img.png" style="width:280px;height:280px;">
  </td>
 </tr>
      </table>
</form>



</body>
</html>