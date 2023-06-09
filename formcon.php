<?php

$tampname = $_FILES['photo']['tmp_name'];
$target_folder = "uploderfiles";
$target_filename = $_FILES['photo']['name'];
$target_filesize =$_FILES['photo']['size'];
$target_fileerror = $_FILES['photo']['error'];
$target_filetype = $_FILES['photo']['type'];

$target_file = $target_folder."/".basename($target_filename);

if($target_filesize > 2097152){
    $error[]= "you file musst be 2MB";
}

if($target_fileerror==0){
    $file_status = move_uploaded_file($tampname,$target_file);
}
require_once("conection.php");

$photo = $_FILES['photo']['name'];
if($file_status){
    $query = "INSERT INTO $tablename (`pic_name`) value ('$photo')";
}
$result = mysqli_query($conn,$query);
if($result==1){
    echo "";
}else{
    echo "file error";
}
?>