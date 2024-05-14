<?php
$name=$_POST['name'];
$email=$_POST['email'];
$conn =mysqli_connect("localhost","root","","college123");
$sql="INSERT INTO deptcs(name,email)values('$name','$email')";
$result=mysqli_query($conn,$sql);
if($result)
{
echo "email register sucessfully";
}
else
{ 
echo "email registeration failed";
}
?>