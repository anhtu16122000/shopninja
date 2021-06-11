<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Ninja</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="cssUser/main.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script src="jsUser/functions.js"></script>
</head>
<body>
     <!-- start menu bar -->
     <section class="fixed-top bg-light" style="z-index:20;">
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid container ">
            <span style="font-family: fantasy; padding-right: 50px;" class="menutitle">NinjaRebirth</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"  id="menuone">
              <a class="nav-link linkhome" aria-current="page" href="#">Trang chủ</a>
            </li>
            <li class="nav-item"  id="menutwo">
              <a class="nav-link linksignin"  href="#">Đăng nhập</a>
            </li>
            <li class="nav-item"  id="menuthree">
              <a class="nav-link linkdangky"  href="#">Đăng ký</a>
            </li>
            <li class="nav-item"  id="menufour">
              <a class="nav-link linkupdate"  href="#">Chỉnh sửa thông tin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
    <!-- start slider -->
  <div class="slider">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/slider/slider01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/slider/slider02.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/slider/slider03.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
           <!-- form dang nhap -->
<section class=" row container formdangnhap hidden">
      <div class="col-lg-3"></div>
      <div class="col-lg-6 content">
          <div class="col-12 title">
              Đăng nhập
          </div>
          <div class="input-group mb-3 ">
              <input type="text" class="form-control" name="username" placeholder="Username" id="signin-username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password" id="signin-password"aria-label="Password" aria-describedby="basic-addon1">
            </div>
            <div class="row">
              <div class="col-6 col-lg-5 linkdangky" style="cursor: pointer;"> Chưa có tài khoản ?</div>
                <div class="col-1 col-lg-4"></div>
                <div class="col-2 col-lg-3">
                  <input class="btn btn-primary mb-3" type="submit" id="signin-btn" value="Đăng nhập">
                </div>
               
            </div>
    </div>
      <div class="col-lg-3"></div>
  </section>
  <!-- end form dang nhập-->
  <!-- start form đăng ký  -->
<section class="formdangky container hidden">
<div class="row">
  <div class="col-lg-3"></div>
  <form action="#" method="GET" class="col-lg-6 g-1 content ">
      <div class="col-12 title">
          Đăng ký tài khoản
      </div>
      <div class="col-12">
        <label class="form-label">Tên đăng nhập <span style="color:red;margin-left: 10px;" id="span-register-dk"></span></label>
        <input type="text" name="username" class="form-control ip-username-dk"/>
      </div>
      <div class="col-12">
        <label class="form-label">Mật khẩu</label>
        <input type="password" name="password" class="form-control ip-password-dk">
      </div>
      <div class="col-12">
          <label class="form-label">Xác nhận lại mật khẩu</label>
          <input type="password" name="repassword" class="form-control ip-repassword-dk" />
      </div>
  <div class="row">
      <div class="col-md-5">
        <label class="form-label">Link Facebook</label>
        <input type="text" name="link" class="form-control ip-link-dk" data-bs-toggle="tooltip" data-bs-placement="right" title="Người mua sẽ liên hệ với bạn thông qua Facebook này"/>
      </div>
      <div class="col-md-4">
        <label  class="form-label"  id="span-phone-dk">Số điện thoại</label> 
        <input type="text" name="phone" class="form-control ip-phone-dk" data-bs-toggle="tooltip" data-bs-placement="right" title="Người mua sẽ liên hệ với bạn thông qua số điện thoại thoại này"/>
      </div>
      <div class="col-md-3">
        <label class="form-label" name="gender">Giới tính</label>
        <select  class="form-select ip-gender-dk">
          <option selected>Nam</option>
          <option>Nữ</option>
        </select>
      </div>
  </div>
  <div class="row">
    <div class="col-3"></div>
      <input type="submit"  class="btn mt-2 mb-2 btn-success col-6 btn-register-dk" value="Đăng ký"/>
      <div class="col-3"></div>
  </div>
    </form>
    <div class="col-lg-3"></div>
</div>
</section>
<!-- end form đăng ký -->
<!-- start form đăng bài  -->
<section class="formdangbai formdangbaimobile container hidden">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 content g-1">
      <div class="row">
        <span class="title">Đăng bài để bán nào </span>
      </div>
      <div class="row">
        <label class="form-label col-2" >Sever</label>
        <input type="number"  min="1" id="ip-sever-post" class='col-2'>
        <label class="form-label col-3" style="text-align: center;">Đội hình</label>
        <select class="col-4 col-lg-3" aria-label="Default select example" id="ip-team-post">
          <option selected value="chunin">Chūnin</option>
          <option value="jonin">Jōnin</option>
          <option value="kage">Kage</option>
          <option value="lucdao">Lục đạo</option>
          <option value="lucdao1">Lục đạo +1</option>
          <option value="lucdao2">Lục đạo +2</option>
          <option value="vuotqua">Vượt qua</option>
        </select>
      </div>
      <div class="row">
        <label class='col-3 col-lg-2'>Chiến lực</label>
        <input type="range" class="col-8 col-lg-9 " id="rangechienluc"  step="1000" value="50000" min="0" max="1000000">
      </div>
      <div class="row" >

          <SPAN class="col-6" id="spanchienluc" style="text-align: end; color: rgb(233, 7, 7); font-family:fantasy;font-size: large;">
          
          </SPAN>
         
          <button class="col-2 " id="btn-plus-post">+</button>  <button class="col-2" id="btn-minus-post">-</button>

        
      </div>
      <div class="row m-1">
          <label class="input-group-text col-lg-2 col-3" style="text-align:center" id="basic-addon3">Giá bán :</label>
          <input type="text" width="100px" class="col-lg-3 col-3" id="ip-cost-post" aria-describedby="basic-addon3">
          <label class="input-group-text col-lg-2 col-3" id="basic-addon3" style="margin-right: 10px;">VNĐ</label>
          <div class="col-lg-4 col-12 form-check  form-switch">
            
            <input class="form-check-input switch-card-post"  type="checkbox" value="1" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Thẻ vĩnh viễn</label>
          </div>
      </div>
      <div class="row">
        <div class="mb-1">
          <div class="row  m-1" >
            <label for="ip-file-post" style="text-align:center;"   class='col-6 spanchonanh'>
                      Chọn ảnh 
            </label>
          <form action="#" method="POST"  enctype="multipart/form-data" name="upload-form"   id="upload-form">
              <input class="col-9 col-lg-10" id="ip-file-post" name="file-upload[]"  hidden accept="image/*" multiple type="file">
          </form>
          <?php include('model/upload_image.php');?>
       
        </div>
      </div>
      
      <div class="row">
        <div class="input-group">
          <span class="input-group-text">Chi tiết</span>
          <textarea class="form-control" id="text-des-post" rows="8" aria-label="With textarea"></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-3"></div>
        <button type="button" class="btn mt-2 mb-2 btn-success col-6"  id="ip-post-post">Đăng bài </button>
        <div class="col-3"></div>
    </div>
      <div class="col-lg-3"></div>
</div>
  </section>
  <!-- end form đăng bài -->
<!-- start form chinh sua thong tin -->
  <section class="container formupdate hidden">
      <div class="row">
          <div class="col-lg-3"></div>
          <form class="col-lg-6 content">
              <div class="col-12 title">
                  Chỉnh sửa thông tin
              </div>
              <div class="form-row">
              <div class="form-group col-md-12">
                  <label >Tài khoản</label>
                  <input  class="form-control" id="ip-username-edit"  disabled>
              </div>
              <div class="form-group col-md-12">
                  <label>Nhập khẩu cũ</label>
                  <input class="form-control mr-sm-1" id="ip-password-edit" type="password">
              </div>
              
              </div>
              <div class="form-row">
              <div class="form-group col-md-12">
                  <label >Mật khẩu mới</label>
                  <input class="form-control mr-sm-1" id="ip-newpassword-edit" type="password">
              </div>
              <div class="form-group col-md-12">
                  <label>Nhập lại mật khẩu</label>
                  <input class="form-control mr-sm-1" id="ip-renewpassword-edit" type="password">
              </div>
              </div>
              <div class=" row form-group">
                  <div class="form-group col-md-5">
                      <label>Link facebook</label>
                      <input type="text" class="form-control" id="ip-link-edit">
                  </div>
                  <div class="form-group col-md-4">
                      <label>Số điện thoại</label>
                      <input type="text" class="form-control" id="ip-phone-edit">
                  </div>
                  <div class="form-group col-md-3">
                      <label>Giới tính</label>
                      <select class="form-select" id="ip-gender-edit" aria-label="Default select example">
                          <option selected>Nam</option>
                          <option>Nữ</option>
                      </select>
                  </div>
              </div>
              <div class="row">
                <div class="col-3"></div>
                  <button type="button" class="btn mt-2 mb-2 btn-success col-6" id="ip-btn-edit">Xác nhận</button>
                  <div class="col-3"></div>
              </div>
          </form>
          <div class="col-lg-3"></div>  
      </div>
  </section>
 
<!-- end form chinh sua thong tin -->
  </div>
     <!-- end slider -->
     <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/bootbox.all.min.js"></script>
     <script src="jsUser/functions.js"></script>
    <script src="jsUser/main.js"></script>
     <script src="jsUser/dangky.js"></script>
     <script src="jsUser/ajax.js"></script>    
     <script src="jsUser/sigin.js"></script>
     <Script src="jsUser/post.js"></Script>
     <Script src="jsUser/editUser"></Script>
    
</body>
</html>