<?php
     include('database.php');
     function randomFileName($length=10){
         $result = substr(str_shuffle(implode(array_merge(range('A','Z'),range('a','z'),array('0','9')))),0, $length-1);
         return $result;
     }
    if(isset($_POST['event'])){
        $event = $_POST['event'];
        switch($event){
        case 'addInfo':{
            $idInfo = randomFileName();
            $stt = $_POST['stt'];
            $title = $_POST['title'];
            $des = $_POST['des'];
            $db = new dataBase;
            $sql = "INSERT INTO `information` VALUES ('".$stt."','".$idInfo."','".$title."','".$des."','')";
            if($db->insertData($sql)){
                $res[$event] =1;
                $res['idInfo'] = $idInfo;
            }else{
                $res[$event] =0;
            }
            echo json_encode($res);
            break;
        }
        case 'buildAddInfo':{
            $db = new dataBase;
            $sql = "SELECT * FROM `information` ORDER BY stt ASC";
            $datas= $db->getAllData($sql);
            if(!empty($datas)){
                foreach($datas as $key => $value){
                    $temp['stt'] = $value['stt']; 
                    $temp['idinfo'] = $value['idinfo']; 
                    $temp['title'] = $value['title']; 
                    $arrImage = $value['image'];     
                    $temp['image'] = explode("||",$arrImage);   
                    $res[$key] = $temp;               
                }
                $result =array_values($res);
                echo json_encode($result);
            }else{
                $res[$event]= 0;
                echo json_encode($res);
            }
           

            break;
        }
        case 'deleteInfo':{
            $idInfo = $_POST['idInfo'];
            $image =  $_POST['arrimage'];
            $arrimage = explode(",",$image);
            $db = new dataBase;
            $sql = "DELETE FROM `information` WHERE idinfo='".$idInfo."'";
            if($db->deleteData($sql)){
                foreach($arrimage as $key => $value){
                    unlink('../images/info/'.$value);
                }
                
                $res[$event]=1;
            }else{
                $res[$event]=0;
            }
            echo json_encode($res); 
            break;
        }
    }
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
                    @move_uploaded_file($data['tmp_name'][$key],'images/info/'.$imageName);
                  
                }
            }
    }
    if(!empty($arraynameImage)){
        $nameImage = implode("||",$arraynameImage); 
      
        if(isset($_POST['idInfo'])){
            $idInfo = $_POST['idInfo'];
            $database = new database;
            $sql = "UPDATE `information` SET `image` ='".$nameImage."' WHERE `information`.`idinfo` = '$idInfo'";
            $check = $database->updateData($sql);
        }
        echo '
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href);
            }
        </script>
        ';
    }   
   


?>