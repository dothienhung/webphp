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
   <div class="header"></div>
   <div class="content">
   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Anh</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($post as $post) : ;?>
    <tr>
      <th scope="row"><?php echo $post["id"] ;?></th>
      <td><?php echo "<img src='./public/image/".$post['image']."'>";?></td>
      <td><?php echo $post["descriptions"] ;?></td>
    </tr> 
   <?php endforeach ;?>
  </tbody>
</table>
   </div>
   <div class="footer"></div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>