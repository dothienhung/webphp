<div class="header-post-right">
    <h2 style="float:left;color:blue;font-size:30px;">Manager</h2>  
    <a href="index.php?controller=post&action=addPost"><button type="submit" class="btn btn-primary" style="float:right;">Add</button></a>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" style="text-align:center;">ID</th>
      <th scope="col" style="text-align:center;">Images</th>
      <th scope="col" style="text-align:center;">title</th>
      <th scope="col" style="text-align:center;">Status</th>
      <th scope ="col" style="text-align:center;">Action</th>
    </tr>
  </thead>
  <?php  if(!empty($context['Post'])) :?>
  <tbody>
    <?php foreach ($context["Post"] as $post) :?>
    <tr>
      <th scope="row"><?php echo $post["id"] ;?></th>
      <td><img src="./public/image/<?php echo $post['image']; ?>" style="max-width: 100px;"></td>
      <td><?php echo $post["title"] ;?></td>
      <td><?php echo $post["status"];?></td>
      <td style="padding-left:6px;text-align: center;">
      <a href="index.php?controller=post&action=showById&id=<?= $post['id']?>"><button type="button" class="btn btn-primary">Show</button></a>
      <a href="index.php?controller=post&action=editPost&id=<?= $post['id']?>"><button type="button" class="btn btn-primary">Edit</button></a>
      <a href="index.php?controller=post&action=delete&id=<?= $post['id']?>"><button type="button" class="btn btn-primary">Delete</button></a>
      
      </td>
    </tr> 
    <?php endforeach ?>
  </tbody>
  <?php endif?>
</table>