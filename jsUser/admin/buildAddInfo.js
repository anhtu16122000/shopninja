function buildHTMLInfo(){
    var dataSend = {event:"buildAddInfo"};
queryPOST_json('model/adminAddInfo.php',dataSend,function(res){
    if(res.length>0){
        var HTML = "<thead><tr>"+
        "<th scope='col'>STT</th>"+
        "<th scope='col'>Title</th>"+
        "<th scope='col'>Thao tác</th>"+
        "</tr></thead><tbody>";
        res.forEach(element => {
   
         HTML +='<tr class="data-request-info" data-arrimage="'+element.image+'" data-idinfor="'+element.idinfo+'">'+
           '<th scope="row">'+element.stt+'</th>'+
           '<td>'+element.title+'</td>'+
           '<td><button class="btn btn-danger btn-delete-info">Xóa</button></td>'+
         '</tr>';
        });
        HTML+="</tbody>";
        $(".table-add-info").html(HTML);
    }else{
        var HTML = "Chưa có dữ liệu"
        $(".table-add-info").html(HTML);
    }
    

});
}

//Sự kiện khi click button xóa
$(".table-add-info").on('click','.btn-delete-info',function(){
    var idInfo= $(this).parents('.data-request-info').attr('data-idinfor');
    var arrimage  = $(this).parents('.data-request-info').attr('data-arrimage');
    var dataSend = {event:'deleteInfo',idInfo:idInfo,arrimage:arrimage};
    bootboxalert("Nhấn <strong>OK</strong> để hoàn thành thao tác","Bạn muốn xóa thông báo này không ?",function(result){
        if(result==true){   
            queryPOST_json('model/adminAddInfo.php',dataSend,function(res){              
                    if(res.deleteInfo==1){
                        buildHTMLInfo();
                    }else if(res.deleteInfo==0){
                        bootboxalert("Xóa không thành công, hãy thử lại sau","Thao tác thất bại",function(){});
                    }
            });
        }else{}
    });
  
      
});
