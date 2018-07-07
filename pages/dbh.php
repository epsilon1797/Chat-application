<?php

$conn=mysqli_connect("localhost","root","shubham1234","mydatabase");
mysqli_select_db($conn,"autorefresh");
if(!$conn){
	die("connection failed".mysqli_connect_error());

}



?>
