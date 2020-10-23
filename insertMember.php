<?php
session_start();
include('headercheckLogin.php');
require 'connect.php';

echo $id_card = $_POST['id_card'];
echo $name = $_POST['name'];
echo $surname = $_POST['surname'];
echo $phone = $_POST['phone'];
echo $roomselect = $_POST['roomselect'];
echo $typecar = $_POST['typecar'];
echo $plate = $_POST['plate'];
echo $datestart = $_POST['datestart'];

$query = "INSERT INTO rental_2.member(id_member,idcard_member,name_member,sur_member,id_room,vehicle_member,plate_member,phone_member,fristday_member) 
VALUES ('','$id_card','$name','$surname',$roomselect,'$typecar','$plate','$phone','$datestart')";
$result = mysqli_query($connect, $query);


$querylastrecord = "SELECT member.id_member FROM member ORDER BY id_member DESC LIMIT 1";
$resultlastrecord = mysqli_query($connect, $querylastrecord);

$row = mysqli_fetch_array($resultlastrecord);
$lastMember = $row['id_member'];
if ($result) {



    $queryroom = "UPDATE rental_2.room SET id_member = $lastMember,status_room='ไม่ว่าง' WHERE id_room=$roomselect";
    $resultroom = mysqli_query($connect, $queryroom);

    echo "<script>alert('เพิ่มข้อมูลสำเร็จ');</script>";
    Header("Refresh:0; url=admin.php");
} else {

    echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ\nกรุณาลองใหม่อีกครั้ง');</script>";
    Header("Refresh:0; url=admin.php");
}
