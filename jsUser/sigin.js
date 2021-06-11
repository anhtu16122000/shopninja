
    $('#signin-btn').click(function (e) { 
        e.preventDefault();
        var username = $("#signin-username").val();
        var password = $("#signin-password").val();
    
        if(username.trim()=="" || password.trim()==""){
            bootboxwarning('Bạn chưa điền đủ thông tin kìa',"Thông báo !!!",function(){});
        }else {
            var dataSend = {event:'signin',username:username,password:password};
            queryPOST_json('model/progress.php',dataSend,function(res){
                if(res['signin']==1){
                    localStorage.setItem("username",res.username);
                    localStorage.setItem("password",res.password);
                    localStorage.setItem("avt",res.avt);
                    localStorage.setItem("link",res.link);
                    localStorage.setItem("sdt",res.sdt);
                    localStorage.setItem("rank",res.rank);
                    localStorage.setItem("gioitinh",res.gioitinh);
                    location.reload();
                }else{
                    bootboxerror("Sai tài khoản hoặc mật khẩu","Đăng nhập thất bại",function(){});
                }
                    
                
            })
        }
    });