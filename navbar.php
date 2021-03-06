<?php
require 'connect.php';

$queryroomEmpty = "SELECT * FROM rental_2.room WHERE status_room='ห้องว่าง'";
$resultroomEmpty = mysqli_query($connect, $queryroomEmpty);


$queryroomEmpty2 = "SELECT * FROM rental_2.room";
$resultroomEmpty2 = mysqli_query($connect, $queryroomEmpty2);

$queryBill = "SELECT bill.id_bill,member.name_member,member.sur_member,bill.result_bill,bill.status_bill,bill.date_bill FROM  member INNER JOIN bill ON member.id_member=bill.id_member";
$resultBill = Mysqli_query($connect,$queryBill);

?>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand text-white" href="#"><i class="fas fa-home"></i> HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <button typr="button" class="nav-link btn text-white" data-toggle="modal" data-target="#insert">เพิ่มข้อมูลลูกค้า</button>

            </li>
            <li class="nav-item">
                <!--gdkmdffmfmfm;fawd-->
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ดูข้อมูลหอพัก
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#roomEmpty">ดูห้องว่าง</a>
                    <a class="dropdown-item"href="#"  data-toggle="modal" data-target="#bill" >ดูการชำระเงิน</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">เพิ่มห้อง</a>
                </div>
            </li>
            <li class="nav-item">
                <!--gdkmdffmfmfm;fawd-->
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">

            <h4 class="mr-sm-2"></h4>
            <button class="btn btn-outline-danger my-2 my-sm-0 text-white" data-toggle="modal" data-target="#logout" type="button">logout</button>
        </form>
    </div>
</nav>

<!-- Modal logout-->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">การยืนยัน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ต้องการออกจากระบบหรือไม่?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                <a href="logout.php" class="btn btn-outline-danger">ตกลง</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal insert-->
<div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มรายชื่อสมาชิก</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container ">
                    <div class="form-group">

                        <form method="post" action="insertMember.php">
                            <div class="was-validated">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-2">
                                        <label>รหัสบัตรประชาชน</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" class="form-control" name="id_card" id="id_card" placeholder="เช่น 1245566822314" required>
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
                                        <input type="text" class="form-control" name="name" id="name" placeholder="เช่น ตาลีขายหอย" required>
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
                                        <input type="text" class="form-control" name="surname" id="surname" placeholder="เช่น ยายม้อยขายหวี" required>
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
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="เช่น 0954784542" required>
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
                                    <select class="form-control" name="roomselect" require>
                                        <?php while ($row = mysqli_fetch_array($resultroomEmpty)) { ?>
                                            <option value="<?php echo $row['id_room']; ?>"><?php echo $row['id_room']; ?> | <?php echo $row['type_room']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        ** กรุณาเลขห้อง **
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="row justify-content-center align-items-center">
                                <div class="col-2">
                                    <label>ประเภทรถ</label>
                                </div>
                                <div class="col-4">
                                    <select class="form-control" name="typecar">

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
                                    <input type="text" class="form-control" name="plate" id="plate" placeholder="เช่น กด-6969">
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
                                    <input type="date" class="form-control" name="datestart" id="datestart" placeholder="2020/04/02" required>
                                    <div class="invalid-feedback">
                                        ** กรุณาใส่นามสกุล **
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="reset" class="btn btn-secondary" value="ยกเลิก">
                <input type="submit" class="btn btn-primary" value="ตกลง">
            </div>
        </div>
    </div>
</div>
</form>

<!-- Modal roomEmpty-->
<div class="modal fade" id="roomEmpty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ห้องว่าง</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover" id="viewRoom">
                    <thead>
                        <tr>
                           <th>เลขห้อง</th>
                           <th>ประเภทห้อง</th>
                           <th>สถานะห้อง</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($resultroomEmpty2)){ ?>
                        <tr>
                           <td><?php echo $row['id_room'];?></td>
                           <td><?php echo $row['type_room'];?></td>
                           <td><?php echo $row['status_room'];?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                
            </div>
        </div>
    </div>
</div>


<!-- Modal Bill-->
<div class="modal fade" id="bill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">การชำระ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover" id="viewChash">
                    <thead>
                        <tr>
                           <th>รหัสบิล</th>
                           <th>ชื่อลูกค้า</th>
                           <th>นามสกุล</th>
                           <th>มูลค่าที่ต้องชำระ</th>
                           <th>สถานะการจ่าย</th>
                           <th>วันที่</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($resultBill)){ ?>
                        <tr>
                           <td><?php echo $row['id_bill'];?></td>
                           <td><?php echo $row['name_member'];?></td>
                           <td><?php echo $row['sur_member'];?></td>
                           <td><?php echo $row['result_bill'];?></td>
                           <td><?php echo $row['status_bill'];?></td>
                           <td><?php echo $row['date_bill'];?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                
            </div>
        </div>
    </div>
</div>