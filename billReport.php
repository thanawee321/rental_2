<?php
session_start();
include('headercheckLogin.php');
require 'connect.php';

$id_member = $_REQUEST['id'];
$name_sur = $_REQUEST['name'];

$query = "SELECT bill.id_bill,member.name_member,member.sur_member,bill.water_bill,bill.electric_bill,bill.room_bill,bill.result_bill,bill.report_bill,bill.status_bill,bill.date_bill 
FROM  member 
INNER JOIN bill 
ON member.id_member=bill.id_member 
WHERE member.id_member=$id_member";

$result = mysqli_query($connect, $query);

?>

<html>

<head>
    <title>การจัดการ Bill</title>
    <?php include('header.php') ?>
</head>

<body>
    <?php include('navbar.php') ?>
    <div class="container pt-3">
        <h1>รายการ Bill ของคุณ <?php echo $name_sur; ?></h1>
<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertBill">
<i class="fas fa-plus-circle"></i> เพิ่มบิล
</button>
<br><br>


        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">เลขที่บิล</th>
                    <th scope="col">ชื่อ</th>
                    <th scope="col">นามสกุล</th>
                    <th scope="col">ค่าน้ำ</th>
                    <th scope="col">ค่าไฟ</th>
                    <th scope="col">ค่าห้อง</th>
                    <th scope="col">รวมทั้งหมด</th>
                    <th>รายละเอียด</th>
                    <th>สถานะการจ่าย</th>
                    <th>วันที่</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row['id_bill']; ?></td>
                        <td><?php echo $row['name_member']; ?></td>
                        <td><?php echo $row['sur_member']; ?></td>
                        <td><?php echo $row['water_bill']; ?></td>
                        <td><?php echo $row['electric_bill']; ?></td>
                        <td><?php echo $row['room_bill']; ?></td>
                        <td><?php echo $row['result_bill']; ?></td>
                        <td><?php echo $row['report_bill']; ?></td>
                        <td><?php echo $row['status_bill']; ?></td>
                        <td><?php echo $row['date_bill']; ?></td>

                        <td><button type="button" class="btn btn-danger btndeleteBill" id="<?php echo $row['id_bill']; ?>">ลบ</button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>







    </div>



    <!-- Modal insertBill-->
<div class="modal fade" id="insertBill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
<?php include('footer.php'); ?>

</html>