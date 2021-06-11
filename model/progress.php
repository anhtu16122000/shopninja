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
                $res['username'] = $datas['username'];
                $res['password'] = $datas['password'];
                $res['avt'] = $datas['avt'];
                $res['link'] = $datas['link'];
                $res['sdt'] = $datas['sdt'];
                $res['rank'] = $datas['rank'];
                $res['gioitinh'] = $datas['gioitinh'];
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
                $res['username'] = $datas['username'];
                $res['password'] = $datas['password'];
                $res['avt'] = $datas['avt'];
                $res['link'] = $datas['link'];
                $res['sdt'] = $datas['sdt'];
                $res['rank'] = $datas['rank'];
                $res['gioitinh'] = $datas['gioitinh'];
                $res[$event] = 1;
            }else{
                $res[$event] = 0;
            }
            echo json_encode($res);
            break;
        }
    } 

?>