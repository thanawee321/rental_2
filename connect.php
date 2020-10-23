<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "rental_2";

$connect = mysqli_connect($host,$user,$password,$database);

mysqli_set_charset($connect,"UTF-8");

if($connect == true){

    //echo "<script>alert('เชื่อมต่อฐานข้อมูลสำเร็จ');</script>";

}else {

    $error = mysqli_error($connect);
    echo "<script>alert('เชื่อมต่อฐานข้อมูลสำเร็จ\n$error');</script>";
}



?>