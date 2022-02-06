<?php
include('db.php');
class Post{
    private $db;
    public function __construct($db){
        $this->db =$db;
    }
    //insert data
    public function addPost($title, $description, $image, $date){
        $sql = "INSERT INTO posts(title,description, image, created_at) VALUES('$title', '$description', '$image', '$date') ";
        $result = mysqli_query($this->db,$sql);
       return $result;
    }

    public function getPost(){
        $sql = "SELECT * FROM posts";
        $result = mysqli_query($this->db,$sql);
        return $result;
    }

}