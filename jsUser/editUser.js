
$(document).ready(function () {
    var username = localStorage.getItem("username");
    var password = localStorage.getItem("password");
    var avt      = localStorage.getItem("avt");
    var link     = localStorage.getItem("link");
    var sdt      = localStorage.getItem("sdt");
    var gioitinh =  localStorage.getItem("gioitinh");
    $('#ip-username-edit').val(username);
    $('#ip-link-edit').val(link);
    $('#ip-phone-edit').val(sdt);
    if(gioitinh.toLowerCase().trim()=="nữ"){
        html ='<option selected>Nữ</option><option>Nam</option>';
        $('#ip-gender-edit').html(html);
    }
    $('#ip-btn-edit').click(function (e) { 
        e.preventDefault();
        var oldPassword = $("#ip-password-edit").val().trim();
        var newPassword = $("#ip-newpassword-edit").val().trim();
        var reNewPassword=$("#ip-renewpassword-edit").val().trim();
        var link        = $("#ip-link-edit").val().trim();
        var phone       = $("#ip-phone-edit").val().trim();
        var gender      = $("#ip-gender-edit").val().trim();

        if(oldPassword=="" || newPassword=="" || reNewPassword=="" || link=="" || phone=="" || gender==""){
            bootboxalert("Vui lòng điền hết thông tin","Chưa điền hết thông tin ?",function(){});
        }else if(newPassword !=reNewPassword){
            bootboxalert("Mật khẩu xác nhận không trùng","Xem lại mật khẩu mới",function(){});
        }else if(isNumeric(phone) ==false){
            bootboxalert("Vui lòng kiểm tra lại số điện thoại","Nhập đúng số điện thoại chưa ?",function(){});
        }else if(phone.length !=10){
            bootboxalert("Số điện thoại có vẻ không đúng ? vui lòng kiểm tra lại","Nhập đúng số điện thoại chưa ?",function(){});
        }else{
            var dataSend = {event:'editUser',username:username,oldPassword:oldPassword,newPassword:newPassword
                            ,link:link,phone:phone,gender:gender};

             queryPOST_json('model/progress.php',dataSend,function(res){
                    if(res.editUser==1){
                        bootboxalert("Chỉnh sửa thông tin thành công","Thao tác thành công",function(){});
                        localStorage.setItem("password",oldPassword);
                        localStorage.setItem("avt","regular.png");
                        localStorage.setItem("link",link);
                        localStorage.setItem("sdt",phone);
                        localStorage.setItem("gioitinh",gender);
                        location.reload();
                        appearTable('formupdate');

                    }
             });

        }
    });
    
});