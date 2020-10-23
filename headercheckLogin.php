<?php 

if(!$_SESSION['userid'] && !$_SESSION['username']){

    echo "<script>alert('กรุณา Login เข้าใช้งานก่อนทุกครั้ง\nเมื่อท่านทำการ Logout ออกไปแล้ว!!')</script>";
    Header("Refresh:0; url=index.php");

}else if($_SESSION['status']=="user"){

    echo "<script>alert('สิทธิ์การใช้งานไม่รองรับ\nกรุณาลงชื่อเข้าใช้งานใหม่อีกครั้ง')</script>";
    Header("Refresh:0; url=index.php");

}

?>