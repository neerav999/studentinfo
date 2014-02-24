<?php
     $con=mysqli_connect("studentinfo-db.my.phpcloud.com","studentinfo","n1e2r1a1v1","studentinfo");
    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else
    {
        $query=mysqli_query($con,"insert into user VALUES('','neere')") or die("error");
        echo "hello";
}
mysqli_close($con);
?>