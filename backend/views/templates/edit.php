<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/main.css">
    <title>Post views</title>
    <style>
        
    </style>
</head>
<body>
   <div class="header">
      
   </div>
   <div class="content">
       <div class="title">
       <h2> Sua bai dang</h2>
       </div>
        <form method="POST" action="index.php?controller=post&action=updatePost&id=<?php echo $item['id'];?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $item['title'];?>" name="title">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Descriptions</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $item['descriptions'];?>" name="descriptions">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Status</label>
                    <select class="form-control" id="exampleFormControlSelect1" value="status" name="status">
                    <?php 
                                foreach ($data as $data) {
                                    if($data['id']==$item['status']) {
                                ;?>
                                    <option value="<?=$data['id'];?>"><?=$data['name'];?></option>
                                <?php 
                                    } else {

                                ;?>
                                    <option value="<?=$data['id'];?>"><?=$data['name'];?></option>
                                <?php
                                    }
                                }
                                ;?>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label for="exampleFormControlInput1">Status</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $item['status'];?>" name="status">
                </div> -->
                 <div class="form-group">
                    <label for="image">Image</label>
                    <div class="image">
                    <img src="./public/image/<?php echo $item['image']; ?>" style="max-width: 200px;">
                    </div>
                    <input type="file" name="image" value="<?php echo "<img src='./public/image/".$row['image']."'>";?>">                    
                </div> 
                <div class="from-group" style="float: right;">
                <input type="submit" name="save" value="submit" class="btn btn-primary">
                </div>
                </form>
            </div>
  
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
               

