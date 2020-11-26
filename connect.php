<?php
$host="localhost";
$username="root";
$pass="peakyblinders";

$conn=mysqli_connect($host,$username,$pass)or die(mysqli_error());
mysqli_select_db($conn,"hdeb")or die(mysqli_error());

?>