<?php
$u=$_POST['sname'];
$p=$_POST['email'];
$connction=mysqli_connect("localhost","root","","registration");
$sql="INSERT INTO student (sname,email)VALUES('$U','$P')";
$r=mysqli_query($connection,$sql);
if($r)
{
    echo"mail register successfully";
}
else
{
    "email registration failed";
}
?>