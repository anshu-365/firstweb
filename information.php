<?php
$num1=$_GET["name"];
$num2=$_GET["number"];
$num3=$_GET["email"];
$num4=$_GET["text"];
$num5=$_GET["programming"];
$db=mysqli_connect("localhost","root","","student");
if(!$db)
{
	echo"unable to connect";
	exit();
}
mysqli_select_db($db,"student");
$sql="insert into book values ('".$num1."',".$num2.",'".$num3."','".$num4."','".$num5."')";
echo "$sql";
if(mysqli_query($db,$sql))
echo"correct";
else
echo"wrong";
?>