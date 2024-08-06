<?php 
$host="localhost";
$user="root";
$password="";
$db="database name";

$query=mysqli_connect($host,$user,$password,$db);
if(!$query)
{
	echo "connection is not established";
}
else{
	echo "connection is established";
}

?>