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
	 $sname=$_REQUEST['name']; 
	 $roll=$_REQUEST['rollno'];
	 $reg=$_REQUEST['reg'];
	 $dept=$_REQUEST['dept']; 
	 
	 $link=mysqli_connect("studentinfo-db.my.phpcloud.com","studentinfo","n1e2r1a1v1","studentinfo") or die("Cannot Connect to the database!");
	
	 //mysqlii_select_db("mysqli",$link) or die ("Cannot select the database!");
	 $query="INSERT INTO students (sname, rollno, regno, dname) values('".$sname."', '".$roll."', '".$reg."', '".$dept."')";
		
		  if(!mysqli_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  echo "New record saved successfully!";}
	 ?>

      </p>
      <p align="center"><img onclick="javascript: history.go(-1)" src="img/cooltext457951462.png" onmouseover="this.src='img/cooltext457951462MouseOver.png';" onmouseout="this.src='img/cooltext457951462.png';" /><a href="../"><img border="0" src="img/cooltext457951615.png" onmouseover="this.src='img/cooltext457951615MouseOver.png';" onmouseout="this.src='img/cooltext457951615.png';" /></a></p>
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>