$(".link-nonpost").click(function(){
    appearTable('formnonpost');
    buildHTMLnonPost();
    
});
buildHTMLPost();
$(".linkhome").click(function(){
    appearTable('formmypost');
    buildHTMLPost();
});
$(".linkinfo").click(function(){
    appearTable('formaddinfo');
    buildHTMLInfo();
});
$(".scrollup").click(function(){
    $([document.documentElement, document.body]).animate({
       scrollTop: 0,
   },50);
  });
var rank = localStorage.getItem("rank");
if(rank=="client" || rank==undefined ||rank==null || rank!="admin1612"){
    location.href="index.php";
}
//Sự kiện khi thay đổi tự động duyệt
$("#select-autoaccept").change(function (e) { 
    var result = $(this).val();
    var dataSend= {event:"changeDefault",result:result};
    queryPOST_json("model/buildNonpostAdmin.php",dataSend,function(res){
        changeStaceAcceptSelect();
    });
}); 
// Cập nhập nút lưu tự động duyệt;
function changeStaceAcceptSelect(){
    var dataSend = {event:'checkDefault'}
    queryPOST_json("model/buildNonpostAdmin.php",dataSend,function(res){
        if(res.checkDefault==1){
            var HTML = "<option selected value=0>Không</option>"+
            "<option value=1>Có</option>";
            $("#select-autoaccept").html(HTML);
        }else{
            var HTML = "<option  value=0>Không</option>"+
            "<option selected value=1>Có</option>";
            $("#select-autoaccept").html(HTML);
        }
    });
}
changeStaceAcceptSelect();

