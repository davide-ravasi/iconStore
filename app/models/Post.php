<?php
 class Post {
     private $db;
     
     public function __construct() {
         $this->db = new Database;
     }
     
     public function getPosts() {
         $this->db->query('SELECT * ,
                            posts.created_at as postCreated,
                            users.created_at as userCreated,
                            posts.id as postId
                            FROM posts 
                            INNER JOIN users 
                            ON posts.user_id = users.id
                            ORDER BY posts.created_at DESC');
         
         return $this->db->resultSet();
     }
     
     public function add($data) {
         
         $this->db->query('INSERT INTO posts (user_id, title, body, image_url)
                            VALUES (:user_id,:title,:body,:image_url)');
         
         $this->db->bind(':user_id',$data['user_id']);
         $this->db->bind(':title',$data['title']);
         $this->db->bind(':body',$data['body']);
         $this->db->bind(':image_url',$data['image_url']);
         
               // Execute
          if($this->db->execute()){
            return true;
          } else {
            return false;
          }
     }
     
     public function edit($data) {
         $this->db->query('UPDATE posts 
                            SET title = :title, 
                                body = :body, 
                                user_id = :user_id,
                                image_url = :image_url
                            WHERE id = :id');
         
         $this->db->bind(':user_id',$data['user_id']);
         $this->db->bind('title',$data['title']);
         $this->db->bind(':body',$data['body']);
         $this->db->bind(':id',$data['post_id']);
         $this->db->bind(':image_url',$data['image_url']);
         
               // Execute
          if($this->db->execute()){
            return true;
          } else {
            return false;
          }         
     }
     
     public function getPostById($id) {
         $this->db->query('SELECT * FROM posts WHERE id = :id');
         
         $this->db->bind(':id',$id);
         
         $row =  $this->db->single();
         
         return $row;
     }
     
     public function deletePostById($id) {
         $this->db->query("DELETE FROM posts
                            WHERE id = :id");
         
         $this->db->bind(':id',$id);
         
         if($this->db->execute()) {
             return true;
         } else {
             return false;
         }
     }
 }