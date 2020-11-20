<?php
    include ('./config.php');
    if ($conn->connect_error){
        die("Kết nối thất bại!".$conn->connect_error);
    }
    $sql = "CREATE TABLE Post(
        id  int(6) AUTO_INCREMENT PRIMARY KEY ,
        title VARCHAR(255) NOT NULL,
        descriptions TEXT NOT NULL,
        image varchar(150),
        status int,
        create_at datetime,
        update_at datetime
    )";
    //Kiểm tra dữ liệu được tạo
    if ($conn->query($sql) === TRUE) {
        echo "Tạo table thành công";
    } else {
        echo "Tạo table thất bại: " . $conn->error;
    }
     
    // Ngắt kết nối
    $conn->close();
;?>