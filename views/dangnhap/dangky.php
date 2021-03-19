<div class="shopping-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong>Login page</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="wrapper">
          <ul class="load-list load-list-three">
            <li>
              <div class="row text-center ">
                <div class="container">
                  <div class="row">
                    <div class="onee" style="background-color: lightgray;">
                      <legend class="dangkythanhvien"><a>
                          <br>
                          <i class="glyphicon glyphicon-globe"></i></a>
                        Đăng ký thành viên!
                        <br>
                        <br>
                      </legend>
                      <form action="?action=dangky_xl" method="POST" class="form" role="form" onsubmit="return validate()">

                        <div class="col-sm-4">
                          <input class="form-control regis" type="text" name="ho_dk" placeholder="Họ" required>

                          <input class="form-control regis" type="text" name="ten_dk" placeholder="Tên" required>
                          <div class="pull-left" style="color:gray;font-size: 15px;">
                            Giới tính:
                            <input type="radio" name="gioitinh_dk" value="nam" checked> Nam
                            <input type="radio" name="gioitinh_dk" value="nu"> Nữ
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <input class="form-control regis" type="text" name="diachi_dk" placeholder="địa chỉ" required>
                          <input class="form-control regis" type="text" name="email_dk" placeholder="Email" required>

                          <input class="form-control regis" type="text" name="sdt_dk" placeholder="Số điện thoại" required>

                        </div>

                        <div class="col-sm-4">

                          <!--  <input class="form-control" name="youremail" placeholder="Email" type="email">   -->
                          <input class="form-control regis" type="text" name="tendangnhap_dk" placeholder="Tên đăng nhập" required>

                          <!-- <input class="form-control" name="password" placeholder="Mật khẩu" type="password">   -->
                          <input id="mk1" class="form-control regis" type="password" name="matkhau_dk" placeholder="Mật khẩu" required>

                          <!--  <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">  -->
                          <input id="mk2" class="form-control regis" type="password" name="" placeholder="Nhập lại mật khẩu" required>
                        </div>
                        <button class="btn btn-md btn-danger" type="submit" name="submit">Đăng ký</button>
                      </form>
                      <div class="text-center">
                        <br>
                        <span> Bạn đã có tài khoản? </span>
                        <a class="dn" data-toggle="tab" href="#arrival" style="color:gray;">Đăng nhập</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>