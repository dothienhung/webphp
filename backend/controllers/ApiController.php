<?php
    class ApiController extends Controller{

        public function getApiPost() {
            //goi model post bien post de luu lai model post
            $posts =$this->getModel("PostModel");
            //goi ve ham post de lay tat ca cac post
            $ps =$posts->getPost();
            $arr =[];
            while($post =mysqli_fetch_array($ps)){
                array_push($arr, new Post(
                $post["id"],
                $post["title"],
                $post["descriptions"],
                $post["image"],
                $post["status"],
                $post["create_at"],
                $post["update_at"]));
            }
            echo json_encode($arr,JSON_UNESCAPED_UNICODE);
            
        }
        
    }

    class Post{
        public $id;
        public $title;
        public $descriptions;
        public $image;
        public $status;
        public $create_at;
        public $update_at ;

        public function __construct($id ,$title,$descriptions,$image,$status,$create_at,$update_at)
        {
            $this->id=$id;
            $this->title =$title;
            $this->descriptions= $descriptions;
            $this->image=$image;
            $this->status=$status;
            $this->create_at=$create_at;
            $this->update_at=$update_at;
        }
    }

;?>