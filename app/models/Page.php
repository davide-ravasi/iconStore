<?php
 class Page {
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
     
     public function getLastPosts() {
         $this->db->query('SELECT * ,
                            posts.created_at as postCreated,
                            users.created_at as userCreated,
                            posts.id as postId
                            FROM posts 
                            INNER JOIN users 
                            ON posts.user_id = users.id
                            ORDER BY posts.created_at DESC
                            LIMIT 4');
         
         return $this->db->resultSet();
     }
 }     