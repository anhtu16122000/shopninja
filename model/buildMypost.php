<?php
    require_once('database.php');
   
    $event = $_POST['event'];
   if($event=='buildmypost'){
        session_start();
        $username= $_SESSION['username'];
        $user = new tableUser;
        $datas = $user->getAllData(" select * from user,baiviet,sanpham WHERE user.username=baiviet.username AND baiviet.masp =sanpham.masp AND user.username ='".$username."'");
        if(!empty($datas)){
            foreach($datas as $key =>$value){
                $temp ['mabaiviet']= $value['mabaiviet'];
                $temp['masp'] = $value['masp'];
                $temp['chienluc'] = number_format($value['chienluc']);
                $temp['doihinh'] = $value['doihinh'];
                $temp['gia'] = number_format($value['gia']);
                $temp['link'] = $value['link'];
                $temp['mota'] = $value['mota'];
                $temp['sdt'] = $value['sdt'];
                $temp['sever'] = $value['sever'];
                $temp['time'] = $value['time'];
                $temp['tinhtrang'] = $value['tinhtrang'];
                if($value['thevv']==0){
                    $temp['thevv'] = 'Không';
                }else{
                    $temp['thevv'] = 'Có';
                }
                $arrImage =  explode("||",$value['image']);
                $temp['image'] = $arrImage;
                $res[$key] = $temp;
            }
            echo json_encode($res);
        }else{
            $res[$event]=0;
            echo json_encode($res);
        }
            
   }else if($event=='deleteItem'){
       $masp = $_POST['masp'];
       $mabaiviet = $_POST['mabaiviet'];
       $image = $_POST['image'];
       $arrImage = explode(",",$image);
        $sanpham = new tableSanpham;
        $baiviet = new tableBaiviet;
        $baiviet->delete($mabaiviet);
        if($sanpham->delete($masp)){
            foreach($arrImage as $key =>$value){
                unlink('../images/post/'.$value);
            }           
            $res[$event]=1;
        }else{
            $res[$event]=0;
        }
        echo json_encode($res);
       
   }

?>
