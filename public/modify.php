<?php
 $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control Panel :: Student Information Panel:: Institute of Technology, DDU</title>
<style type="text/css">

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
    <td><h1 align="center" class="heading"><img src="img/cooltext457948700.png" width="747" height="58" alt="Welcome to Admin Panel" /></h1>
  <p align="center">
    <?php 
	 	 $link=mysqli_connect("studentinfo-db.my.phpcloud.com","studentinfo","n1e2r1a1v1","studentinfo") or die("Cannot Connect to the database!");
	
	// mysql_select_db("mysql",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM students";
		
		  $resource=mysqli_query($link,$query);
		  echo "
		<table align=\"center\" border=\"0\" width=\"70%\">
		<tr>
		<td><b>Name</b></td> <td><b>Roll No.</b></td><td><b>Reg No.</b></td><td><b>Deparment</b></td><td><b>Action</b></td></tr> ";
while($result=mysqli_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>
	<a href=\"modify2.php?id=".$result[0]."\"><img border=\"0\" src=\"img/cooltext457953689.png\"/></a>
	</td></tr>";
	} echo "</table>";
	 ?>

      </p>
  <p align="center">&nbsp;</p>
      <p align="center"><a href="./"><img border="0" src="img/cooltext457951462.png" onmouseover="this.src='img/cooltext457951462MouseOver.png';" onmouseout="this.src='img/cooltext457951462.png';" /></a><a href="./"><img border="0" src="img/cooltext457951615.png" onmouseover="this.src='img/cooltext457951615MouseOver.png';" onmouseout="this.src='img/cooltext457951615.png';" /></a></p>
</td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>