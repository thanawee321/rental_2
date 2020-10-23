<?php 
session_start();
require 'connect.php';
include('headercheckLogin.php');

//query ข้อมูลสมาชิกทั้งหมด
$query = "SELECT * FROM rental_2.member";
$result = mysqli_query($connect,$query);

$queryroomEmpty2 = "SELECT * FROM rental_2.room WHERE status_room='ห้องว่าง'";
$resultroomEmpty2 = mysqli_query($connect, $queryroomEmpty2);

?>
<html>

<head>
    <title>การจัดการหอพัก</title>
    <?php include('header.php'); ?>
</head>

<body>
<?php include('navbar.php');?>

    <div class="container pt-3">
        <h1>รายชื่อสมาชิก</h1>
    <table class="table table-hover text-center" id="viewdata">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">เลขบัตร</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">นามสกุล</th>
      <th>เลขห้อง</th>
      <th>ประเภทรถ</th>
      <th>ป้ายทะเบียน</th>
      <th>เบอร์โทร</th>
      <th>วันเริ่มเข้า</th>
      <th>ลบ</th>
      <th>แก้ไข</th>
      <th>บิล</th>
    </tr>
  </thead>
  <tbody>
      <?php while($row = mysqli_fetch_array($result)){ ?>
    <tr>
      <td><?php echo $row['id_member'];?></td>
      <td><?php echo $row['idcard_member'];?></td>
      <td><?php echo $row['name_member'];?></td>
      <td><?php echo $row['sur_member'];?></td>
      <td><?php echo $row['id_room'];?></td>
      <td><?php echo $row['vehicle_member'];?></td>
      <td><?php echo $row['plate_member'];?></td>
      <td><?php echo $row['phone_member'];?></td>
      <td><?php echo $row['fristday_member'];?></td>

      <td><button type="button" class="btn btn-danger btndelete" id="<?php echo $row['id_member'];?>" numberroom="<?php echo $row['id_room'];?>" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button></td>
      <td><button type="button" class="btn btn-warning btnupdate" id="<?php echo $row['id_member'];?>" oldroom="<?php echo $row['id_room'];?>"><i class="far fa-edit"></i></button></td>
      <td><a href="billReport.php" class="btn btn-info" id="<?php echo $row['id_member'];?>"><i class="fas fa-file-invoice"></i></a></td>
    </tr>
      <?php } ?>
  </tbody>
</table>

    </div>

    <!--modal delete-->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">การยืนยัน</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ต้องการลบรายการนี้หรือไม่?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-outline-danger cfdelete">ตกลง</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal update-->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">อัพเดทข้อมูล</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container ">
                    <div class="form-group">

                        <form method="post" action="updateMember.php">
                            <div class="was-validated">
                                <div class="row justify-content-center align-items-center">
                                    <input type="hidden" id="id_memberu" readonly>
                                    <div class="col-2">
                                        <label>รหัสบัตรประชาชน</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" class="form-control" name="id_card" id="id_cardu" required>
                                        <div class="invalid-feedback">
                                            **บัตรประจำตัวประชาชน**
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-2">
                                        <label>ชื่อสมาชิก</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" name="name" id="nameu"  required>
                                        <div class="invalid-feedback">
                                            ** กรุณาใส่ชื่อ **
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="row justify-content-center align-items-center">
                                    <div class="col-2">
                                        <label>นามสกุล</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" name="surname" id="surnameu"  required>
                                        <div class="invalid-feedback">
                                            ** กรุณาใส่นามสกุล **
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="row justify-content-center align-items-center">
                                    <div class="col-2">
                                        <label>เบอร์โทร</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" name="phone" id="phoneu"  required>
                                        <div class="invalid-feedback">
                                            ** กรุณาใส่เบอร์โทรศัพท์ **
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row justify-content-center align-items-center">
                                <div class="col-2">
                                    <label>เลขห้อง</label>
                                </div>
                                <div class="col-4">
                                    <select class="form-control" name="roomselectu" id="roomselectu">
                                  <?php while($row = mysqli_fetch_array($resultroomEmpty2)) { ?>

                                    <option value="<?php echo $row['id_room'];?>"><?php echo $row['id_room'];?> | <?php echo $row['type_room'];?></option>
                                  <?php } ?>
                                    </select>
                                  
                                </div>
                            </div>

                            <br>

                            <div class="row justify-content-center align-items-center">
                                <div class="col-2">
                                    <label>ประเภทรถ</label>
                                </div>
                                <div class="col-4">
                                    <select class="form-control" name="typecar" id="typecaru">

                                        <option value="ไม่มีรถ"> - </option>
                                        <option value="รถมอเตอร์ไซค์">รถมอเตอร์ไซค์</option>
                                        <option value="รถยนต์">รถยนต์</option>

                                    </select>
                                    <div class="invalid-feedback">
                                        ** กรุณาเลขห้อง **
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-2">
                                    <label>ป้ายทะเบียนรถ</label>
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control" name="plate" id="plateu"  >
                                    <div class="invalid-feedback">
                                        ** กรุณาใส่นามสกุล **
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-2">
                                    <label>วันที่แรกเข้า</label>
                                </div>
                                <div class="col-4">
                                    <input type="date" class="form-control" name="datestart" id="datestartu"  required>
                                    <div class="invalid-feedback">
                                        ** กรุณาใส่นามสกุล **
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
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