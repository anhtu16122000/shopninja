
$("#btn-add-info").click(function(){
    var stt = $("#input-stt").val();
    var title = $("#input-title").val();
    var des = $("#input-description").val();
    var submit = document.getElementById("form-info");
    if(stt=="" || title=="" ||des==""){
        bootboxalert("Vui lòng điền đầy đủ thông tin","Chưa điền hết thông tin",function(){});
    }else{
        var dataSend = {event:'addInfo',stt:stt,title:title,des:des};
        queryPOST_json("model/adminAddInfo.php",dataSend,function(res){
            if(res.addInfo==1){
                var idInfor = res.idInfo;
                $('.insert-send-data').html('<input  type="text"  value="'+idInfor+'" name="idInfo" hidden>');
                submit.submit();
            }else if(res.addInfo==0){
                bootboxerror("Thêm thông tin thất bại, vui lòng thử lại sau","Thao tác không thành công",function(){});
            }
        });
    }
    
});



