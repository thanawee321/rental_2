<?php
session_start();
require 'connect.php';
if (isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM rental_2.login WHERE id_login='$username' AND password_login='$password'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);

        $_SESSION['userid'] = $row['id_user'];
        $_SESSION['name'] = $row['id_login'] . " " . $row['password_login'];
        $_SESSION['status'] = $row['status_login'];

        if ($_SESSION['status'] == "admin") {

            
            Header("Location: admin.php");
        } else if ($_SESSION['status'] == "user") {

            
            Header("Location: user.php");
        }
    } else {

        echo "<script>alert('ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง')</script>";
        Header("Refresh:0; url=index.php");
    }
} else {
    echo "<script>alert('กรุณา Login เข้าใช้งานก่อนทุกครั้ง\nเมื่อท่านทำการ Logoutออกไปแล้ว!!')</script>";
    Header("Refresh:0; url=index.php");
}
