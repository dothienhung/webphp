<?php
    class PostController extends Controller{
        public $posts;

        public function __construct() {
            $this->posts =$this->getModel("PostModel");
        }
        public function getAllPost(){          
            $this->getView("PostView",["Post"=>$this->posts->getPost(),
                                        "Page"=> "post"]);
        }

        public function addPost(){
           $this->getView("PostView",["Page"=>"add",
                                       "post"=>$this->posts->addPost()]);
        }

        public function showById()
        {   
            $id =$_GET['id'];
            $this->getView("PostView",[ "Post"=>$this->posts->getById($id),
                                        "Page"=>"show"]);
        }
        public function delete()
        {   
            $id =$_GET['id'];
            $this->posts->delete($id);
            $this->getView("PostView",[ "Post"=>$this->posts->delete($id),
                                        "Page"=>"post"]);
            
        }

        public function editPost(){
            if(isset($_GET['id']) && $_GET['id'] != '' && $_GET['id']>0){

                $id =$_GET['id'];
                $item =$this->posts->edit($id);
                $data =$this->posts->getstatus();
                require_once "./backend/views/templates/edit.php";
            }
        }

        public function updatePost(){

            if(isset($_POST['save']))
            {
                
                $file =$_FILES['image'];
                $file_name =$file['name'];
                
                move_uploaded_file($file['tmp_name'],'./public/image/'.$file_name);
                $this->posts->update($_GET['id'],$_POST['title'],$_POST['descriptions'],$_POST['status'],$file_name);
                                          
            }  
            header("Local:http://localhost/manager_post/index.php?controller=Post&action=getAllPost");          
        }

        public function getAllPostfont(){          
           $item = $this->posts->getPost();
           $page = isset($_GET['page']) ? $_GET['page'] : 1;
           $pages =$this->posts->getLimit();
           require_once "./backend/views/fontend/post.php";
        }

        public function getpostfont(){

            $id =$_GET['id'];
            $post =$this->posts->getById($id);
            require_once "./backend/views/fontend/show.php";
        }

        
    }

;?>