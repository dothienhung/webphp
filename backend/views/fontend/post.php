<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/main.css">
    <title>Post views</title>
</head>
<body>
        <div class="header">
        </div>
        <div class="container">
        <div class="header-post-right">
             <h2 style="float:left;color:blue;font-size:30px;">Manager</h2>  
        </div>
            <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col" style="text-align:center;">ID</th>
                <th scope="col" style="text-align:center;">Images</th>
                <th scope="col" style="text-align:center;">title</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($item as $post) :?>
                <tr>
                <th scope="row"><?php echo $post["id"] ;?></th>
                <td><img src="./public/image/<?php echo $post['image']; ?>" style="max-width: 100px;"></td>
                <td><a href="index.php?controller=post&action=getpostfont&id=<?php echo $post['id'] ;?>"><?php echo $post["title"] ;?></a></td> 
                </td>
                </tr> 
                <?php endforeach ?>
            </tbody>
            
            </table>
        </div>
        <div class="footer">
        <?php
            $Previous = $page - 1;
            $Next = $page + 1;
        ;?>
        <nav aria-label="Page navigation example" style="padding-left: 500px;">
            <nav aria-label="Page navigation example">
            <ul class="pagination">
            <li>
				<a href="index.php?controller=post&action=getAllPostfont&page=<?= $Previous; ?>" aria-label="Previous">
				    <span aria-hidden="true">&laquo; Previous</span>
				</a>
			</li>
               
                <?php for($i = 1; $i<= $pages; $i++) : ?>
                    <li style="margin-left:6px;"><a href="index.php?controller=post&action=getAllPostfont&page=<?= $i; ?>"><?= $i; ?></a></li>
                <?php endfor; ?>
                                    
                <li>
				      <a href="index.php?controller=post&action=getAllPostfont&page=<?= $Next; ?>" aria-label="Next">
				        <span aria-hidden="true">Next &raquo;</span>
				      </a>
                </li>
            </ul>
            </nav>
        </nav>
        </div>
</body>
</html>