<?php 
session_start();
session_destroy();

echo "<script>alert('ทำการ Logout ออกจากระบบแล้ว');</script>";

Header('Refresh:0; url=index.php');

?>