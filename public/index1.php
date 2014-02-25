<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Student Information Center:: Institute of Technology,DDU</title>
<style type="text/css">
<!--
.heading {
	color: #F90;
	font-family: "Comic Sans MS", cursive;
}
.options {
	font-family: "Comic Sans MS", cursive;
	font-size: 16px;
	font-style: oblique;
	color: #F93;
}
</style>
</head>

<body background="img/1019286_abstract_orange_tiles_background_.jpg">

<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading"><img src="img/computer.jpg" width="304" height="42" /></h1>
      <h1 align="center" class="heading"><img src="img/cooltext457954659.png" width="830" height="51" alt="Welcome to Site" /></h1>
      <p align="center">
        <?php 
	 	 $link=mysqli_connect("studentinfo-db.my.phpcloud.com","studentinfo","n1e2r1a1v1","studentinfo") or die("Cannot Connect to the database!");
	
	 //mysql_select_db("mysql",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM students";
		
		  $resource=mysqli_query($link,$query);
		  echo "
		<table align=\"center\" border=\"0\" width=\"70%\">
		<tr>
		<td><b>Name</b></td> <td><b>Roll No.</b></td><td><b>Reg No.</b></td><td><b>Deparment</b></td></tr> ";
while($result=mysqli_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td></tr>";
	} echo "</table>";
	 ?>
        
      </p>
  <p align="center">&nbsp;</p>
      <p align="center"> <a href="admin/index.php"><img border="0" src="img/cooltext457954941.png" onmouseover="this.src='img/cooltext457954941MouseOver.png';" onmouseout="this.src='img/cooltext457954941.png';" /></a><a href="http://www.google.com"><img border="0" src="img/cooltext457955210.png" onmouseover="this.src='img/cooltext457955210MouseOver.png';" onmouseout="this.src='img/cooltext457955210.png';" /></a></p>
      <center>
      <h1>Developed For Students</h1>
      </center>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>