<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Naruto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="fancybox-master/dist/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="cssUser/main.css">
   
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
            <li class="nav-item"  id="">
              <a class="nav-link linkinfo"  href="#">Thông tin</a>
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
        <span class="title">Bạn muốn đăng gì nào ?</span>
      </div>
      <div class="row">
        <label class="form-label col-2" >Server</label>
        <input type="number"  min="1" id="ip-sever-post" class='col-2'>
        <label class="form-label col-3" style="text-align: center;">Đội hình</label>
        <select class="col-4 col-lg-3" aria-label="Default select example" id="ip-team-post">
          <option selected value="Chūnin">Chūnin</option>
          <option value="Jōnin">Jōnin</option>
          <option value="Kage">Kage</option>
          <option value="Lục đạo">Lục đạo</option>
          <option value="Lục đạo +1">Lục đạo +1</option>
          <option value="Lục đạo +2">Lục đạo +2</option>
          <option value="Vượt qua">Vượt qua</option>
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
             <div class="insert-send-data"></div>
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
 
          <div class="col-lg-1"></div>
      </div>
  </section>
 
  </div>
     <!-- end slider -->
     <!-- --------Scroll Up ------ -->
     <div class="position-fixed bottom-0 end-0 scrollup" style="z-index:20; cursor: pointer;" >
        <img src="images/icons/scroll-up.png" atl="Ấn để lên trên">
    </div>



      <!-- start form trang chu -->
     <section class="formtrangchu container-fluid hidden">
     <div class="row">
     <div class="col-lg-1"></div>
          <!-- start main -->
        <div class="col-lg-10 content">
          <div class="row">
              <div class="col-12 title">
                  Danh sách bài đăng
              </div>
          </div>
          <section class=" mt-4 main-content mb-2">
         
              <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php include('model/buildContent.php'); ?>
              </div>
             
          </section>  
        </div>
     </div>   
     </section> 
        <!-- end form trang chu -->
         <!-- start form my post -->
     <section class="formmypost container-fluid hidden">
     <div class="row">
     <div class="col-lg-1"></div>
          <!-- start main -->
        <div class="col-lg-10 content">
          <div class="row">
              <div class="col-12 title">
                  Bài viết của bạn
              </div>
          </div>
          <section class=" mt-4 main-content mb-2">
        
              <div class="row row-cols-1 row-cols-md-3 g-4" id="main-formmypost">
                   
              </div>
          </section>  
          
        </div>
     </div>    
    </section>     
        <!-- end form my post -->
             <!-- start form thong bao -->
     <section class="forminfo container-fluid hidden">
     <div class="row">
     <div class="col-lg-1"></div>
          <!-- start main -->
        <div class="col-lg-10 content">
          <div class="row">
              <div class="col-12 title">
                  Thông tin
              </div>
          </div>
          <section class=" mt-4 main-content mb-2">
        
              <div class="row row-cols-1 " id="main-forminfo">
              <div class="accordion info-accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                          <span style="text-align:center;">Giao dịch trung gian</span>
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                          This is the first item's accordion body
                          It is shown by default, until the collapse plugin adds the appropriate classes 
                          that we use to style each element. These classes control the overall appearance, 
                          as well as the showing and hiding via CSS transitions. You can modify any of this with 
                          custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the 
                          accordion-body though the transition does limit overflow.
                          <div class="row row-cols-1 row-cols-md-3 g-4">
                          <a href="images/slider/slider01.jpg" data-fancybox>  <img src="images/slider/slider01.jpg" class="img-thumbnail" alt="..."> </a> 
                          <a href="images/slider/slider01.jpg" data-fancybox>  <img src="images/slider/slider01.jpg" class="img-thumbnail" alt="..."> </a> 
                          <a href="images/slider/slider01.jpg" data-fancybox>  <img src="images/slider/slider01.jpg" class="img-thumbnail" alt="..."> </a>
                          </div>
                  
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                          Accordion Item #2
                        </button>
                      </h2>
                      <div id="panelsStayOpen-feTwo" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body ">
                          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                          Accordion Item #3
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </section>  
          
        </div>
     </div>    
    </section>     
        <!-- end form thong bao -->
    
   

        
     <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/bootbox.all.min.js"></script>
     <script src="fancybox-master/dist/jquery.fancybox.min.js"></script>
     <script src="jsUser/functions.js"></script>
     <script src="jsUser/appearMenu.js"></script>
     <script src="jsUser/bootbox.js"></script>
    <script src="jsUser/main.js"></script>
     <script src="jsUser/dangky.js"></script>
     <script src="jsUser/ajax.js"></script>    
     <script src="jsUser/sigin.js"></script>
     <Script src="jsUser/editUser.js"></Script>
     <Script src="jsUser/post.js"></Script>
     <script src="jsUser/buildMypost.js"></script>
     <script src="jsUser/buildInfo.js"></script>


</body>

</html>