<?php  
    include('database.php');
    function randomFileName($length=10){
        $result = substr(str_shuffle(implode(array_merge(range('A','Z'),range('a','z'),array('0','9')))),0, $length-1);
        return $result;
    }
    $arraynameImage =array();
        if(isset($_FILES['file-upload'])){
          
                $data = $_FILES['file-upload'];
                foreach($data['name'] as $key => $value){
                    if(!empty($value)){
                        $name = randomFileName();
                        $extension = ltrim($data['type'][$key],"image/");
                        $imageName = $name.".".$extension;
                        $arraynameImage[] = $imageName;
                        @move_uploaded_file($data['tmp_name'][$key],'images/post/'.$imageName);
                    }
                }
                if(!empty($arraynameImage)){
                    $nameImage = implode("||",$arraynameImage); 
                    if(isset($_POST['mabaiviet'])){
                        $mabaiviet = $_POST['mabaiviet'];
                        $baiviet = new tableBaiViet;
                        $sql = "UPDATE `baiviet` SET `image` = '".$nameImage."' WHERE `baiviet`.`mabaiviet` = '$mabaiviet'";
                        $check = $baiviet->updateData($sql);
                    }
                }   
                echo '
                <script>
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                </script>
                ';

        }
    if(isset($_POST['event'])){
        $event = $_POST['event'];  
        if($event=='post'){
            $masp =  $_POST['masp'];
            $mabaiviet = randomFileName();
            $card = $_POST['card'];
            $sdt  = $_POST['sdt'];
            $link = $_POST['link'];
            $username= $_POST['username'];
            $sever = $_POST['sever'];
            $team  = $_POST['team'];
            $power = $_POST['power'];
            $description = $_POST['description'];
            $cost  = $_POST['cost'];
            $nameImage ="";
           
            $sanpham = new tableSanpham;
            $baiviet = new tableBaiViet;
            if($sanpham->insert($masp,$sever,$power,$card,$cost,$team)){
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $time = date("G:i \N\g\à\y\ d/m/Y",mktime());
                $baiviet->insert($mabaiviet,$nameImage,$description,$username,$masp,$time);
              
                $res[$event] =1;
                $res['mabaiviet'] = $mabaiviet;
          
            }else{
                $res[$event] =0;    
            }
            echo json_encode($res);
        } 
    }
  