function appearLoginMenu(username,avt){
    var html ='  <ul class="navbar-nav me-auto mb-2 mb-lg-0">'+
    '<li class="nav-item"  id="menuone">'+
      '<a class="nav-link linkhome" aria-current="page" href="#">Trang chủ</a>'+
    '</li>'+
    '<li class="nav-item"  id="menutwo">'+
      '<a class="nav-link linkpost"  href="#">Đăng bài</a>'+
    '</li>'+
    '<li class="nav-item"  id="menuthree">'+
      '<a class="nav-link linkinfo"  href="#">Thông tin</a>'+
    '</li>'+
    '<li class="nav-item"  id="menufour">'+
      '<a class="nav-link linkupdate"  href="#">Chỉnh sửa thông tin</a>'+
    '</li>'+
      '<li class="nav-item dropdown "  id="menufive">'+
        '<a class="nav-link menufive dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">'+username+'</a>'+
      '<ul class="dropdown-menu dropdown-menu-light dropdownsignout" aria-labelledby="navbarDarkDropdownMenuLink">'+
      '<li><a class="dropdown-item btn-mypost" href="#">Bài viết của tôi</a></li>'+

        '<li><a class="dropdown-item btn-signout" href="#">Đăng xuất</a></li>'+
      '</ul>'+
      '</li>'+ 
      '<img src="images/avatar/'+avt+'" class="rounded nav-item" style="margin-left: 5px;" width="40px" height="39px" >'+  
 
  '</ul>';
    $('#navbarSupportedContent').html(html);
  }
  function appearLoginAdmin(username,avt){
    var html ='  <ul class="navbar-nav me-auto mb-2 mb-lg-0">'+
    '<li class="nav-item"  id="menuone">'+
      '<a class="nav-link linkhome" aria-current="page" href="#">Trang chủ</a>'+
    '</li>'+
    '<li class="nav-item"  id="menutwo">'+
      '<a class="nav-link linkpost"  href="#">Đăng bài</a>'+
    '</li>'+
    '<li class="nav-item"  id="menuthree">'+
      '<a class="nav-link linkinfo"  href="#">Thông tin</a>'+
    '</li>'+
    '<li class="nav-item"  id="menufour">'+
      '<a class="nav-link linkupdate"  href="#">Chỉnh sửa thông tin</a>'+
    '</li>'+
      '<li class="nav-item dropdown "  id="menufive">'+
        '<a class="nav-link menufive dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">'+username+'</a>'+
      '<ul class="dropdown-menu dropdown-menu-light dropdownsignout" aria-labelledby="navbarDarkDropdownMenuLink">'+
      '<li><a class="dropdown-item btn-mypost" href="#">Bài viết của tôi</a></li>'+
      '<li><a class="dropdown-item" href="formadmin.php">Quản lý trang</a></li>'+
        '<li><a class="dropdown-item btn-signout" href="#">Đăng xuất</a></li>'+
      '</ul>'+
      '</li>'+ 
      '<img src="images/avatar/'+avt+'" class="rounded nav-item" style="margin-left: 5px;" width="40px" height="39px" >'+  
 
  '</ul>';
    $('#navbarSupportedContent').html(html);
  }
  

function format_money(n, currency) {
    return currency + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
  }
function isNumeric(str) {
    if (typeof str != "string") return false // we only process strings!  
    return !isNaN(str) && // use type coercion to parse the _entirety_ of the string (`parseFloat` alone does not do this)...
           !isNaN(parseFloat(str)) // ...and ensure strings of whitespace fail
  }
  

 
   
   
