<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Anh</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <?php  if(!empty($context['Post'])) :?>
  <tbody>
   <?php foreach($context['Post'] as $post) : ;?>
    <tr>
      <th scope="row"><?php echo $post["id"] ;?></th>
      <td><?php echo "<img src='./public/image/".$post['image']."'>";?></td>
      <td><?php echo $post["descriptions"] ;?></td>
    </tr> 
   <?php endforeach ;?>
  </tbody>
  <?php endif?>
</table>