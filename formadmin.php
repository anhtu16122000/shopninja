<?php ob_start();
    session_start();
    if($_SESSION['rank'] !='admin1612'){
      echo "<Script>
      alert('Phiên đăng nhập hết hạn');
    </Script>";
        header('location:index.php');
    }else{
     
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị viên</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="fancybox-master/dist/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="cssUser/admin.css">
   
</head>
<body>
      <!-- start menu bar -->

    
      <section class="fixed-top bg-light" style="z-index:20;">
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid container ">
        <span style="font-family: fantasy; padding-right: 50px;" class="menutitle">Admin Form</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"  id="menuone">
              <a class="nav-link linkhome" aria-current="page" href="#">Quản trị</a>
            </li>
            <li class="nav-item"  id="menutwo">
              <a class="nav-link link-nonpost"  href="#">Các bài viết chưa duyệt</a>
            </li>
            <li class="nav-item"  id="menuthree">
              <a class="nav-link linkinfo"  href="#">Thêm thông báo</a>
            </li>
            <li class="nav-item"  id="menufour">
              <a class="nav-link "  href="index.php">Trở về trang chủ</a>
            </li>
          </ul>
        </div>
        
      </div>
    </nav>
   
  </section>

  <section class="formnonpost container-fluid hidden ">
     <div class="row">
     <div class="col-lg-1"></div>
          <!-- start main -->
        <div class="col-lg-10 content">
          <div class="row">
              <div class="col-12 title">
                  Danh sách chưa được duyệt 
              </div> 
          </div>
          <div class="row mt-1">
              <label for="select-autoaccept" class="col-5 col-lg-2"> 
                Tự động duyệt
                </label> 
                <select class="col-4 col-lg-2" id="select-autoaccept">
                  
                </select>
             
          </div>
          
          <section class="mt-4 main-content mb-2">
              <div class="row row-cols-1 row-cols-md-3 g-4 form-nonpost-admin">
              </div>
          </section>  
        </div>
     </div>    
    </section>  
       
    <section class="formmypost container-fluid">
     <div class="row">
     <div class="col-lg-1"></div>
          <!-- start main -->
        <div class="col-lg-10 content">
          <div class="row">
              <div class="col-12 title">
                  Quản trị bài viết  
              </div>
          </div>
          
          <section class="mt-4 main-content mb-2">
              <div class="row row-cols-1 row-cols-md-3 g-4 form-content-admin">
              </div>
          </section>  
          
        </div>
     </div>    
    </section>    
  <!-- Start form add thông báo -->
    <section class="formaddinfo container-fluid hidden">
     <div class="row">
     <div class="col-lg-1"></div>
          <!-- start main -->
        <div class="col-lg-10 content">
          <div class="row">
              <div class="col-12 title">
                  Thêm thông báo 
              </div>
          </div>
         <div class="row" style="margin-left:5px"> Chèn link: 
         &lt;a href="Link cần chèn" class="link">Nội dung 	&lt;/a&gt;
        </div>
          <div class="content-info">
          <table class="table table-striped table-add-info">
              
        </table>
          </div>
          
          <section class="mt-4 main-content mb-2">
              <div class="row form-add-info">
                  <div class="row">
                      <label class="col-4" for="input-stt">Số thứ tự:</label> <input class="col-2" type="number" min=1 id="input-stt">
                  </div>
                  <div class="row">
                      <label class="col-4" for="input-title">Tiêu đề:</label> <input class="col-6" type="text"  id="input-title">
                  </div>
                  <div class="row">
                    <div class="input-group">
                      <span class="input-group-text">Chi tiết</span>
                      <textarea class="form-control" id="input-description" rows="8" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                <form action="#" method="POST" id="form-info" name="upload-form" enctype="multipart/form-data">
                    <input class="col-9 col-lg-10" id="ip-file-info" name="file-upload[]"   accept="image/*" multiple type="file">
                    <div class="insert-send-data"> </div>
               </form>
               <?php
                  include('model/adminAddInfo.php');
               ?>
               <div class="row">
                  <div class="col-3"></div>
                  <div class="col-6"> <button class="btn btn-success" id="btn-add-info"> Thêm thông tin</button> </div>
                  <div class="col-3"></div>
               </div>
              </div>
          </section>  
          
        </div>
     </div>    
    </section>   
    <!-- End form add thông báo  -->
     <div class="position-fixed bottom-0 end-0 scrollup" style="z-index:20; cursor: pointer;" >
        <img src="images/icons/scroll-up.png" atl="Ấn để lên trên">
    </div>
 
     <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/bootbox.all.min.js"></script>
     <script src="fancybox-master/dist/jquery.fancybox.min.js"></script>
     <script src="jsUser/ajax.js"></script>
     <script src="jsUser/bootbox.js"></script>
     <script src="jsUser/admin/buildNonpost.js"></script>
     <script src="jsUser/admin/buildContentAdmin.js"></script>
     <script src="jsUser/admin/addInfo.js"></script>
     <script src="jsUser/admin/appearMenu.js"></script>
     <script src="jsUser/admin/main.js"></script>
     <script src="jsUser/admin/buildAddInfo.js"></script>
     
    

</body>

</html>