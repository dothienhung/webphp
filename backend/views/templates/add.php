<form method="POST" action="index.php?controller=post&action=addPost" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title..." name="title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Descriptions</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title..." name="descriptions">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Status</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title..." name="status">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image" value="">
  </div>
  <div class="from-group">
  <input type="submit" name="save" value="submit">
  </div>
</form>
<a href="index.php?controller=Post&action=getAllPost">Back</a>