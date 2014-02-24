<?php
 $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
 echo $hostname;
$con=mysqli_connect("studentinfo-db.my.phpcloud.com","studentinfo","n1e2r1a1v1","studentinfo");
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
{
    echo "jai ho..........";

}// ...some PHP code for database "my_db"...

// Change database to "test"
//mysqli_select_db($con,"test");

// ...some PHP code for database "test"...

mysqli_close($con);
?>