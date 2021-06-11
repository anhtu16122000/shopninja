
var username = localStorage.getItem("username");
var avt = localStorage.getItem("avt");
if(username !=null){
   appearLoginMenu(username,avt);
}else{
   
}
console.log(makeid());
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
       disappearTable();
     });
     $('.linkpost').click(function (e) { 
        e.preventDefault();
        appearTable('formdangbai');
        
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



