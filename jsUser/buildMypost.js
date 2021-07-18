function buildHTMLPost(){
var dataSend = {event:'buildmypost'};
queryPOST_json('model/buildMypost.php',dataSend,function(res){
   if(res.buildmypost==0){
     var html = "<span style='margin:0 auto;'> Bạn chưa đăng bài viết nào !</span>";
   }else{
    var html = "";
    for(var i=0;i<res.length;i++){
         var tinhtrang = "";
         if(res[i]['tinhtrang']==0){
           tinhtrang = "Chưa duyệt";
         }else{
          tinhtrang = "Đã duyệt";
         }
         html+='  <div class="col item-post" data-masp='+res[i]['masp']+' data-mabaiviet='+res[i]['mabaiviet']+' data-image='+res[i]['image']+'>'+
       
        '<div class="card">'+
        '<a href="images/post/'+res[i]['image'][0]+'" data-fancybox="group-mypost-'+i+'" data-caption="'+res[i]['mota']+'">'+
          '<img src="images/post/'+res[i]['image'][0]+'"  class="card-img-top">'+
      '</a>';
      var arrImage = res[i]['image'];
      for(var j=1; j<arrImage.length;j++){
        html+='<a href="images/post/'+arrImage[j]+'" data-fancybox="group-mypost-'+i+'">'+
        '<img src="images/post/'+arrImage[j]+'" class="card-img-top" hidden>'+
        '</a>';
      }
      html+='<div class="card-body">'+
      '<h5 class="card-title">Server: '+res[i]['sever']+' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Thẻ vv: '+res[i]['thevv']+'</h5>'+
      '<p class="card-text"><pre class="desciption-content">Chiến lực: '+res[i]['chienluc']+'</br>'+
'Đội hình: '+res[i]['doihinh']+'</br>'+
'<span class="cost">Giá bán: '+res[i]['gia']+' VNĐ</span></br>'+
'SĐT: '+res[i]['sdt']+'          <a href="'+res[i]['link']+'" target="_blank"></br>'+
'<btn type="button" class="btn btn-info">Facebook</btn></a><button type="button" class="btn btn-danger btn-xoa-mypost"> Xóa</button>    <span style="color:green">'+tinhtrang+ '</span></pre></p>'+       
    
  '</div>'+
  '<span style="font-size:14px;  text-align:center;">'+res[i]['time']+'</span>'+
  '</div>'+

'</div>';

   
    }
}
$("#main-formmypost").html(html)
});
}
buildHTMLPost();



//================Sự kiện khi click vào một button xóa trong form my post=========
$('#main-formmypost').on('click','.btn-xoa-mypost',function(){
    var masp = $(this).parents('.item-post').attr("data-masp");
    var mabaiviet = $(this).parents('.item-post').attr("data-mabaiviet");
    var image = $(this).parents('.item-post').attr("data-image");
    bootboxalert("Nhấn <b>Ok</b> để xóa bài đăng","Bạn có thật sự muốn xóa ?",function(result){
        if(result==true){
            dataSend = {event:'deleteItem',masp:masp,mabaiviet:mabaiviet,image:image};
        
            queryPOST_json('model/buildMypost.php',dataSend,function(res){
                   if(res.deleteItem==1){
                       buildHTMLPost();
                   }else{
                       bootboxalert("Vui lòng thao tác lại sau","Xóa thất bại",function(){});
                   }
            });
        }else{}

      
    });
  
});

 