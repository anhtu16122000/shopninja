<?php ob_start(); ?>
<?php
    include('database.php');
    function randomFileName($length=10){
        $result = substr(str_shuffle(implode(array_merge(range('A','Z'),range('a','z'),array('0','9')))),0, $length-1);
        return $result;
    }
    $event = $_POST['event'];
    switch($event){
        case 'registeraccount':{
            $username = $_POST['username'];
            $password  = md5($_POST['password']);
            $link   = $_POST['link'];
            $phone    = $_POST['phone'];
            $gender      = $_POST['gender'];
            $cmnd ="";
            $avt = 'regular.png';
            $rank ='client';
            $user = new tableUser;
           
            $check =$user->insert($username,$password,$link,$phone,$gender,$cmnd,$avt,$rank);
            if($check){
                $datas =$user->getAllData("Select * From user where username='$username' and password='$password'");
                $res['username'] = $datas[0]['username'];
                $res['password'] = $datas[0]['password'];
                $res['avt'] = $datas[0]['avt'];
                $res['link'] = $datas[0]['link'];
                $res['sdt'] = $datas[0]['sdt'];
                $res['rank'] = $datas[0]['rank'];
                $res['gioitinh'] = $datas[0]['gioitinh'];
                session_start();
                $_SESSION['username'] =$username;
                $_SESSION['rank'] ='client';
                $res[$event]=1;
               
            }else{
                $res[$event]=0;
            }
            echo json_encode($res);
            break;
        }
        case 'signin':{
            $user = new tableUser;
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $datas = $user->getAllData("Select * From user where username='$username' and password='$password'");
            if(empty($datas)==false){
                $res['username'] = $datas[0]['username'];
                $res['password'] = $datas[0]['password'];
                $res['avt'] = $datas[0]['avt'];
                $res['link'] = $datas[0]['link'];
                $res['sdt'] = $datas[0]['sdt'];
                $res['rank'] = $datas[0]['rank'];
                $res['gioitinh'] = $datas[0]['gioitinh'];
                session_start();
                $_SESSION['username'] =$username;
                if($res['rank']=='admin1612'){
                    $_SESSION['rank'] ='admin1612';
                }else{
                    $_SESSION['rank'] ='client';
                }
                $res[$event] = 1;
            }else{
                $res[$event] = 0;
            }
            echo json_encode($res);
            break;
        }
        case 'editUser':{
            $username = $_POST['username'];
            $oldpasword  = md5($_POST['oldPassword']);
            $newPassword= md5($_POST['newPassword']);
            $link      = $_POST['link'];
            $phone      = $_POST['phone'];
            $gender      = $_POST['gender'];

            $user  = new tableUser;
            $check =  $user->selectData("SELECT * FROM user WHERE username='$username' AND password='$oldpasword'");
            if($check==1){  
               $user->updateCustom($username,$newPassword,$link,$phone,$gender);
                $res[$event]=1;
                      
            }else{
                $res[$event]=0;
            }
            echo json_encode($res);
            break;
        }
        case 'buildInfo':{
            $db = new dataBase;
            $sql = "SELECT * FROM `information` ORDER BY stt ASC";
            $datas= $db->getAllData($sql);
        if(!empty($datas)){
                foreach($datas as $key => $value){
                    $temp['stt'] = $value['stt']; 
                    $temp['idinfo'] = $value['idinfo']; 
                    $temp['title'] = $value['title'];
                    $temp['description'] = $value['description'];
                    $arrImage = $value['image'];   
                    $temp['image'] = explode("||",$arrImage);        
                    $res[$key] = $temp;
                }
            }else{
                $res[$event] =0;
            }
            echo json_encode($res);
            break;
        }
    } 

?>