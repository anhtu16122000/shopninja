$(document).ready(function () {
    var card = 0;
    var range = document.getElementById('rangechienluc');
    var chienluc = document.getElementById('spanchienluc');
  // Hiển thị giá trị thanh trượt mặc định
     chienluc.innerHTML = format_money(parseInt(range.value),"");
     $("#btn-plus-post").click(function(){
        range.value = parseInt(range.value)+1000;
        chienluc.innerHTML = format_money(parseInt(range.value),"");
     });
     $("#btn-minus-post").click(function(){
        range.value = parseInt(range.value) -1000;
        chienluc.innerHTML = format_money(parseInt(range.value),"");
     });
  //Cập nhật giá trị thanh trượt hiện tại (mỗi khi bạn kéo tay cầm thanh trượt)
  function updatePowerValue(){
    range.oninput = function()
    {
       chienluc.innerHTML = format_money(parseInt(range.value),"");
    }
  }
  
  updatePowerValue();
  $('.switch-card-post').change(function (e) { 
   e.preventDefault();
     if(card==0){
        card =1;
     }else{
        card =0;
     }
});
     $("#ip-post-post").click(function(){
      var fileName = $('input[type=file]').val();
         if(fileName.trim()==""){
            bootboxalert("Hãy chọn ảnh cho bài đăng của mình","Chưa thêm ảnh ?",function(){
                  
            });
         }else{
            bootboxalert("Bài đăng của bạn sẽ xuất hiện sau khi được kiểm duyệt, Hãy nhấn 'OK' để hoàn thành thao tác ","Cảm ơn bạn đã đăng bài",function(){
                        var masp     = makeid();
                     var username = localStorage.getItem("username");
                     var gender   = localStorage.getItem("gioitinh");
                     var link     = localStorage.getItem("link");
                     var sdt      = localStorage.getItem("sdt");
                     var sever = $("#ip-sever-post").val();
                     var team = $("#ip-team-post").val();
                     var power = $("#rangechienluc").val();
                     var description = $("#text-des-post").val();
                     var cost = $("#ip-cost-post").val();
                     
                     
                  
                     var dataSend= {event:'post',masp:masp,card:card,sdt:sdt,link:link,gender:gender
                                    ,username:username,sever:sever,team:team,power:power
                                    ,description:description,cost:cost};
                  
                                 
                     queryGET_json('model/upload_image.php',dataSend,function(res){
                        console.log(res);
                        if(res.post==1){
                           
                        }else{
                           alert("thất bại");
                        }
                     });
                     var submitpost = document.getElementById("upload-form");
                     submitpost.submit();
                     });
            }
      
     });
    

});