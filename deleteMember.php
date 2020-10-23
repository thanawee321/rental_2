<?php
session_start();
include('headercheckLogin.php');
require 'connect.php';



$id_member = $_POST['id_member'];
echo $id_room = $_POST['id_room'];

$query = "DELETE FROM rental_2.member WHERE id_member=$id_member";
$result = mysqli_query($connect, $query);


if($result == true){

    $queryroom = "UPDATE rental_2.room SET id_member='',status_room='ห้องว่าง' WHERE id_room=$id_room";
    $resultroom = mysqli_query($connect,$queryroom);

    echo "<script>alert('ดำเนินการลบสำเร็จ');</script>";
    Header("Refresh:0; url=admin.php");
}else {

    echo "<script>alert('ดำเนินการลบไม่สำเร็จ');</script>";
    Header("Refresh:0; url=admin.php");


}
