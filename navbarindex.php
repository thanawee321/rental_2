<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><i class="fas fa-home"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="admin.php">เพิ่มข้อมูลลูกค้า</a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">จัดการบิลลูกค้า</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ดูข้อมูลหอพัก
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">ดูห้องว่าง</a>
          <a class="dropdown-item" href="#">ดูการชำระเงิน</a>
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
      <button class="btn btn-outline-info my-2 my-sm-0" data-toggle="modal" data-target="#login" type="button">login</button>
    </form>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container ">
          <div class="form-group">

            <form method="post" action="checklogin.php">
              <div class="was-validated">
                <div class="row justify-content-center align-items-center">
                  <div class="col-3">
                    <label>ชื่อผู้ใช้งาน : </label>
                  </div>
                  <div class="col-6">
                    <input type="text" class="form-control" name="username" id="username" placeholder="เช่น aaaaa" required>
                    <div class="invalid-feedback">
                      **กรุณาใส่ชื่อผู้ใช้งาน**
                    </div>
                  </div>
                </div>
                <br>
                <div class="row justify-content-center align-items-center">
                  <div class="col-3">
                    <label>รหัสผ่าน : </label>
                  </div>
                  <div class="col-6">
                    <input type="password" class="form-control" name="password" id="password" placeholder="เช่น 696969" required>
                    <div class="invalid-feedback">
                      **กรุณาใส่รหัสผ่าน**
                    </div>
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
    </from>
  </div>
</div>