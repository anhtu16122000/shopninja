<?php
    require_once('database.php');
   
    $event = $_POST['event'];
   if($event=='buildmypost'){
        $user = new tableUser;
        $datas = $user->getAllData(" select * from user,baiviet,sanpham WHERE user.username=baiviet.username AND baiviet.masp =sanpham.masp AND baiviet.tinhtrang=0");
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
   }else if($event=='accept'){
       $mabaiviet = $_POST['mabaiviet'];
       $baiviet = new tableBaiViet;
       $sql = "UPDATE `baiviet` SET `tinhtrang`='1' WHERE mabaiviet='".$mabaiviet."'";
       if($baiviet->updateData($sql)){
           $res[$event]=1;
       }else{
           $res[$event]=0;
       }
       echo json_encode($res);

   }else if($event=='changeDefault'){
       $result = $_POST['result'];
       $baiviet = new tableBaiViet;
       if($result==0){
            $sql ="ALTER TABLE `baiviet` CHANGE `tinhtrang` `tinhtrang` TINYINT(1) NOT NULL DEFAULT '0'";
            if($baiviet->updateData($sql)){
                $db = new dataBase;
                $sql ="UPDATE `default` SET `condition`='0' WHERE id=1";
                $db->updateData($sql);
                $res[$event] = 1;
            }else{
                $res[$event] = 0;
            }
       }else{
            $sql ="ALTER TABLE `baiviet` CHANGE `tinhtrang` `tinhtrang` TINYINT(1) NOT NULL DEFAULT '1'";
            if($baiviet->updateData($sql)){
                $db = new dataBase;
                $sql ="UPDATE `default` SET `condition`='1' WHERE id=1";
                $db->updateData($sql);
                $res[$event] = 2;
            }else{
                $res[$event] = 0;
            }
       }
       echo json_encode($res);
   }else if($event =='checkDefault'){
        $db = new dataBase;
        $datas = $db->getAllData("SELECT * FROM `default` WHERE id=1 ");
        $condition  =$datas[0]['condition'];
        if($condition==0){
            $res[$event] = 1;
        }else{
            $res[$event] = 2;
        } 
        echo json_encode($res);

   }

?>
