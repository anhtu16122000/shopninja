<?php
class dataBase{
        private $hostname ='localhost';
        private $username ='root';
        private $password ='';
        private $dbname ='shopninja';
        public $conn =NULL;

        public function connect(){
            $this->conn = mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);
            if($this->conn){
                mysqli_set_charset($this->conn,'utf-8');
            }else{
                echo "kết nối thất bại";
                exit();
            }
        }

        public function getAllData($sql){
            $this->connect();
            $query = mysqli_query($this->conn,$sql);
            $datas = array();
            if($query){
                while($data =  mysqli_fetch_assoc($query)){
                     $datas = $data;    
                }
            }
            return $datas;
        } 

        public function insertData($sql){
            $this->connect();
            return mysqli_query($this->conn,$sql);
        }
        public function deleteData($sql){
            $this->connect();
            $result = mysqli_query($this->conn,$sql);
            if(mysqli_affected_rows($this->conn)>0){
                return true;
            }else{
                return false;
            }
        }
        public function updateData($sql){
            $this->connect();
            return mysqli_query($this->conn,$sql);
        }
    }
    //=========================Table San Phẩm===============================================
    class tableSanpham extends dataBase{

        public function delete($id){
            $sql ="DELETE FROM `sanpham` WHERE masp='$id'";
            return $this->deleteData($sql);
            
        }
        public function insert($masp,$sever,$chienluc,$thevv,$gia,$doihinh){
            $sql = "INSERT INTO `sanpham`(`masp`,`sever`, `chienluc`, `thevv`, `gia`,`doihinh`) 
            VALUES ('$masp','$sever','$chienluc','$thevv','$gia','$doihinh')";
            return $this->insertData($sql);
        }  

        public function update($masp,$sever,$chienluc,$thevv,$gia){
            $sql = "UPDATE `sanpham` SET`sever`='$sever',`chienluc`='$chienluc',`thevv`='$thevv',`gia`='$gia' WHERE masp='$masp'";
            return $this->updateData($sql);
        }
    }
    //================================TABLE USER==========================================
    class tableUser extends dataBase{
        public function delete($username){
            $sql ="DELETE FROM `user` WHERE username='$username'";
            return $this->deleteData($sql);
        } 

        public function insert($username,$password,$link,$sdt,$gioitinh,$cmnd,$avt,$rank){
            $sql = "INSERT INTO `user`(`username`, `password`, `link`, `sdt`, `gioitinh`, `cmnd`, `avt`, `rank`)
             VALUES ('$username','$password','$link','$sdt','$gioitinh','$cmnd','$avt','$rank')";
            return $this->insertData($sql);
        }
        public function update($username,$password,$link,$sdt,$gioitinh,$cmnd,$avt,$rank){
            $sql = "UPDATE `user` SET `password`='$password',`link`='$link',`sdt`='$sdt',`gioitinh`='$gioitinh',`cmnd`='$cmnd',`avt`='$avt',`rank`='$rank' WHERE username =$username";
            return $this->updateData($sql);
        }
    }
    //================================TABLE DoiHinh==========================================
    class tableDoiHinh extends dataBase{
        public function delete($madh){
            $sql ="DELETE FROM `doihinh` WHERE madh='$madh'";
            return $this->deleteData($sql);
        } 

        public function insert($madh,$tendoihinh,$soluong,$masp){
            $sql = "INSERT INTO `doihinh`(`madh`, `tendoihinh`, `soluong`, `masp`) 
            VALUES ('$madh','$tendoihinh','$soluong','$masp')";
            return $this->insertData($sql);
        }
        public function update($madh,$tendoihinh,$soluong,$masp){
            $sql = "UPDATE `doihinh` SET `tendoihinh`='$tendoihinh',`soluong`='$soluong',`masp`='$masp' WHERE madh='$madh'";
            return $this->updateData($sql);
        }
    }
    //================================TABLE DoiHinh==========================================
    class tableBaiViet extends dataBase{
        public function delete($mabaiviet){
            $sql ="DELETE FROM `baiviet` WHERE mabaiviet='$mabaiviet'";
            return $this->deleteData($sql);
        } 

        public function insert($mabaiviet,$image,$mota,$username,$masp){
            $sql = "INSERT INTO `baiviet`(`mabaiviet`,`image`, `mota`, `username`, `masp`) 
                    VALUES ('$mabaiviet','$image','$mota','$username','$masp')";
            return $this->insertData($sql);
        }
        public function update($mabaiviet,$image,$mota,$username,$masp){
            $sql = "UPDATE `baiviet` SET `image`='$image',`mota`='$mota',`username`='$username',`masp`='$masp' WHERE mabaiviet='$mabaiviet' ";
            return $this->updateData($sql);
        }
    }
?>