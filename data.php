<?php

$servername="localhost";
$username="root";
$password="";
$database="phptute";

//creating database connection

$conn=mysqli_connect($servername, $username, $password, $database);

//check connection

if(!$conn)
{
	die("Failed to connect".mysqli_connect_error());
}

else
{
	echo "connection successfull <br>";
}

$sql="INSERT INTO `users` (`sno`, `name`, `age`, `salary`) VALUES ('3', 'ARYAN', '16', '400000000')";
if(mysqli_query($conn, $sql)){
	echo "Success";
}

else
{
	echo "error".mysqli_error($conn);
}

mysqli_close($conn);
?>