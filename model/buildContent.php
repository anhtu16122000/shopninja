<?php
    require_once('database.php');
    $user = new tableUser;
    $datas = $user->getAllData(" select * from user,baiviet,sanpham WHERE user.username=baiviet.username AND baiviet.masp =sanpham.masp AND baiviet.tinhtrang=1");
    $index =0;
    if(!empty($datas)){
    foreach($datas as $key=>$value){
        $index++;
        $arrImage=explode("||",$value['image']);
        $sever = $value['sever'];
        if($value['thevv']==0){
            $thevv = 'không';
        }else{
            $thevv = 'có';
        }
        $link =$value['link'];
        $chienluc = $value['chienluc'];
        $gia = $value['gia'];
        $time = $value['time'];
        $doihinh = $value['doihinh'];
        $mota   = $value['mota'];
        $sdt = $value['sdt'];
        echo '                   
        <div class="col">
       
          <div class="card">
          <a href="images/post/'.$arrImage[0].'" data-fancybox="group-'.$index.'" data-caption="'.$mota.'">
            <img src="images/post/'.$arrImage[0].'"  class="card-img-top">
        </a>';
         array_shift($arrImage);
         foreach($arrImage as $key =>$value){
            echo '
            <a href="images/post/'.$value.'" data-fancybox="group-'.$index.'">
            <img src="images/post/'.$value.'" class="card-img-top" hidden>
            </a>
            ';

         } 
         echo   ' 
         <div class="card-body">
              <h5 class="card-title">Server: '.$sever.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Thẻ vv: '.$thevv.'</h5>
              <p class="card-text"><pre class="desciption-content">Chiến lực: '.number_format($chienluc).'
Đội hình: '.$doihinh.'
<span class="cost">Giá bán: '.number_format($gia).' VNĐ</span>
SĐT: '.$sdt.'          <a href="'.$link.'" target="_blank"><btn type="button" class="btn btn-info">Facebook</btn></a></pre></p>        
          </div>
          <span style="font-size:14px;  text-align:center;">'.$time.'</span>   
          </div>
         
        </div>';
    }
 
}else{
    echo "<span style='margin:0 auto;'> Chưa có bài viết nào, hãy quay lại sau nhé ! </span>";
}
   


?>