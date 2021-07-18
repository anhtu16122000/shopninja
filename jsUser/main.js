var username = localStorage.getItem("username");
var avt = localStorage.getItem("avt");
var rank = localStorage.getItem("rank");
if(username ==null || username==undefined || username==""){

}else{
   if(rank=='admin1612'){
      appearLoginAdmin(username,avt);
   }else{
      appearLoginMenu(username,avt);
   }    
}
//Xuất hiện form trang chủ đầu tiên
appearTable('formtrangchu'); 

       $(".linksignin").click(function(){
       appearTable('formdangnhap');
    });
    $(".linkdangky").click(function(){
        appearTable('formdangky');
     });
     $(".linkupdate").click(function(){
        if(username!=null){
         appearTable('formupdate');
        }else{
          bootboxalert("Vui lòng đăng nhập trước","Bạn chưa đăng nhập !",function(){
            appearTable('formdangnhap');
          });
        }
         
     });
     $('.linkhome').click(function(){
      appearTable('formtrangchu');
     });
     $('.linkpost').click(function (e) { 
        e.preventDefault();
        appearTable('formdangbai');  
     });
     $('.linkinfo').click(function(){
        appearTable('forminfo');
        buildHTMLInfoClient();
     });
     $('.btn-mypost').click(function(){
         appearTable('formmypost');
         buildHTMLPost();
     });
 $(".scrollup").click(function(){
   $([document.documentElement,document.body]).animate({
      scrollTop: 0,
  },50);
 }); 
$('.btn-signout').click(function(){
   localStorage.removeItem("username");
   localStorage.removeItem("password");
   localStorage.removeItem("avt");
   localStorage.removeItem("link");
   localStorage.removeItem("sdt");
   localStorage.removeItem("rank");
   localStorage.removeItem("giotinh");
   location.reload();
});




