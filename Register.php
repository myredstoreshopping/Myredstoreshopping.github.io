<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
	die(Not connected to server");
}
if(!mssql_select_db("spon",$conn))
{
	die("Not connected to database));
}
$name=$_POST['name'];
$email id=$_POST['email id'];
$password=$_POST['password'];

$sql="INSERT INTO
mata(name,email,password)VALUE('$name','email','password')";
if(mysql_query($sql))
{
echo"Data Inserted successfully";
}
else
	echo"Data not Inserted";
?>