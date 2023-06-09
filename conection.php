<?php
$hostname = "localhost";
$user = "root";
$dbpass = "";
$dbname = "files";
$tablename = "aploder";

 $conn = mysqli_connect($hostname,$user,$dbpass,$dbname) or die("conn error");

 if($conn){
    echo "";
 }else{
    echo "sorry lost data";
 }
?>