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
                        
                        echo '
                        <script>
                            if ( window.history.replaceState ) {
                                window.history.replaceState( null, null, window.location.href );
                            }
                        </script>
                        ';
                    
                        
                    }
                }
        }
    if(!empty($arraynameImage)){
        $nameImage = implode("||",$arraynameImage);  
        $baiviet = new tableBaiViet;
        // $sql = "UPDATE `baiviet` SET `image`='$nameImage'WHERE masp='$masp'";
        // $baiviet->updateData($sql);   
    }
    if(isset($_GET['event'])){
        $event = $_GET['event'];  
        if($event=='post'){
            $masp =  $_GET['masp'];
            $mabaiviet = randomFileName();
            $card = $_GET['card'];
            $sdt  = $_GET['sdt'];
            $link = $_GET['link'];
            $username= $_GET['username'];
            $sever = $_GET['sever'];
            $team  = $_GET['team'];
            $power = $_GET['power'];
            $description = $_GET['description'];
            $cost  = $_GET['cost'];
            $nameImage ="";
           
            $sanpham = new tableSanpham;
            $baiviet = new tableBaiViet;
            if($sanpham->insert($masp,$sever,$power,$card,$cost,$team)){
               
                $baiviet->insert($mabaiviet,$nameImage,$description,$username,$masp);
                $data =  $sanpham->getAllData();
                $res['imageName'] = $data['image'];
                $res[$event] =1;
          
            }else{
                $res[$event] =0;    
            }
            echo json_encode($res);
        } 
    }
  