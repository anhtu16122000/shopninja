
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
        alert(oldPassword+"-"+newPassword+"-"+reNewPassword+"-"+link+"-"+phone+"-"+gender);
    });
    
});