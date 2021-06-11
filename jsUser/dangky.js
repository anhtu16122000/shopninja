$(document).ready(function () {
    $(".btn-register-dk").click(function (e) { 
        e.preventDefault();
        var username =  $(".ip-username-dk").val();
        var password = $(".ip-password-dk").val();
        var repassword = $(".ip-repassword-dk").val();
        var link = $(".ip-link-dk").val();
        var phone = $(".ip-phone-dk").val();
        var gender = $(".ip-gender-dk").val();
        if(password.trim()=="" || username.trim()=="" || link.trim()=="" || repassword.trim() =="" || phone.trim()==""|| link.trim()==""){
            bootboxwarning("Vui lòng điền hết thông tin","Thông báo !!!",function(){});
        }else if(password.trim()!=repassword.trim()){
            bootboxerror("Mật khẩu không trùng nhau","Kiểm tra lại mật khẩu !!!",function(){});
        }else if(isNumeric(phone)==false){
            bootboxerror("Số điện thoại này đã đúng chưa ?","Kiểm tra lại số điện thoại !!!",function(){});
        }else{
            var dataSend = {event:'registeraccount',
                            username:username,
                            password:password,
                            link:link,
                            phone:phone,
                            gender:gender};
            queryPOST_json('model/progress.php',dataSend,function(res){
                if(res.registeraccount==1){
                    console.log(res);
                    localStorage.setItem("username",res.username);
                    localStorage.setItem("password",res.password);
                    localStorage.setItem("avt",res.avt);
                    localStorage.setItem("link",res.link);
                    localStorage.setItem("sdt",res.sdt);
                    localStorage.setItem("rank",res.rank);
                    localStorage.setItem("gioitinh",res.gioitinh);
                    var error = document.getElementById('span-register-dk');
                    location.reload();
                    error.innerHTML="";
                }else{
                    var error = document.getElementById('span-register-dk');
                    error.innerHTML="tài khoản này đã được đăng ký";
                }
            });
        }
        
    
    });

});
