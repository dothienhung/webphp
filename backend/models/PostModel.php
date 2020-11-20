<?php
class PostModel extends DB{
    public function getPost(){
        $sql ="SELECT *from post";
        return mysqli_query($this->con,$sql);
    }
    public function getstatus(){
        $sql = "SELECT * FROM tblstatus";
        return mysqli_query($this->con,$sql);
    }

    public function addPost(){
        if (isset($_POST['save'])) {
            $errors= array();
            $title =$_POST['title'];
            $descriptions =$_POST['descriptions'];
            $status  =$_POST['status'];            
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];

                
            if($file_size > 2097152) {
            $errors[]='Kích thước file không được lớn hơn 2MB';
            }
            $image = $_FILES['image']['name'];
            $target = "./public/image/".basename($image);
            $sql = "INSERT INTO post (title,descriptions,status,image) VALUES ('$title','$descriptions','$status','$image')";
            mysqli_query($this->con,$sql);
            if (move_uploaded_file($file_tmp, $target)) {
            echo '<script language="javascript">alert("Đã upload thành công!");</script>';
            }else{
            echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
            }
        }
    }
    
    public function getById($id){
        
        $sql ="SELECT *from post where id = ".$id." limit 1";
        return mysqli_query($this->con,$sql);
    }

    public function delete($id){
        $sql ="DELETE from post where id =".$id."";
        return mysqli_query($this->con,$sql);
    }

    public function edit($id){
        $sql = "SELECT *from post where id = ".$id." limit 1";
        $result= mysqli_query($this->con,$sql);
        $data = mysqli_fetch_array($result);
        return $data;    
    }

    public function update($id,$title,$descriptions,$status,$image){
        $sql = "UPDATE post SET title ='".$title."', descriptions ='".$descriptions."',status ='".$status."',image ='".$image."' Where id ='".$id."'";
        return mysqli_query($this->con,$sql);

    }


    public function getLimit(){
        $sql1 ="SELECT * from post";
        $result =mysqli_query($this->con,$sql1);
        $numrows =mysqli_num_rows($result);
        $numPage =ceil($numrows/3);
        return $numPage;
    }



}

;?>