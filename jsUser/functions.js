function appearLoginMenu(username,avt){
    var html ='  <ul class="navbar-nav me-auto mb-2 mb-lg-0">'+
    '<li class="nav-item"  id="menuone">'+
      '<a class="nav-link linkhome" aria-current="page" href="#">Trang chủ</a>'+
    '</li>'+
    '<li class="nav-item"  id="menutwo">'+
      '<a class="nav-link linkpost"  href="#">Đăng bài</a>'+
    '</li>'+
    '<li class="nav-item"  id="menuthree">'+
      '<a class="nav-link linkrepost"  href="#">Bài đăng của tôi</a>'+
    '</li>'+
    '<li class="nav-item"  id="menufour">'+
      '<a class="nav-link linkupdate"  href="#">Chỉnh sửa thông tin</a>'+
    '</li>'+
      '<li class="nav-item dropdown "  id="menufive">'+
        '<a class="nav-link menufive dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">'+username+'</a>'+
      '<ul class="dropdown-menu dropdown-menu-light dropdownsignout" aria-labelledby="navbarDarkDropdownMenuLink">'+
        '<li><a class="dropdown-item btn-signout" href="#">Đăng xuất</a></li>'+
      '</ul>'+
      '</li>'+ 
      '<img src="images/avatar/'+avt+'" class="rounded nav-item" style="margin-left: 5px;" width="40px" height="39px" >'+  
 
  '</ul>';
    $('#navbarSupportedContent').html(html);
  }
function appearTable(Class){
    disappearTable();
    $('.'+Class).removeClass('hidden');
}
function disappearTable(){
    $('.formupdate').addClass('hidden');
    $('.formdangky').addClass('hidden');
    $('.formdangnhap').addClass('hidden');
    $('.formmypost').addClass('hidden');
    $('.formdangbai').addClass('hidden');
}
function format_money(n, currency) {
    return currency + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
  }
function isNumeric(str) {
    if (typeof str != "string") return false // we only process strings!  
    return !isNaN(str) && // use type coercion to parse the _entirety_ of the string (`parseFloat` alone does not do this)...
           !isNaN(parseFloat(str)) // ...and ensure strings of whitespace fail
  }
  //=================BOOTBOX=====================
function bootboxerror(message,title,callback){
    bootbox.confirm({
        message:message,
        title:"<img src='images/icons/icon_naruto.png' width='35px' height='35px'></img> <span style='color:red;'>"+title+"</span>",
        backdrop: true,
        callback: callback
    });
}
function bootboxalert(message,title,callback){
    bootbox.confirm({
        message:message,
        title:"<img src='images/icons/icon_naruto.png' width='35px' height='35px'></img> <span style='color:green;'>"+title+"</span>",
        backdrop: true,
        callback: callback
    });
}
function bootboxwarning(message,title,callback){
    bootbox.confirm({
        message:message,
        title:"<img src='images/icons/icon_naruto.png' width='35px' height='35px'></img> <span style='color:yellow;'>"+title+"</span>",
        backdrop: true,
        callback: callback
    });
}
function makeid(n=10) {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < n; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}


 
   
   
