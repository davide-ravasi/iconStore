<?php
  class Pages extends Controller {
     /*private $viewModel;
     private $userModel;
      
     public function __construct(){        
         $this->viewModel = $this->model('Pages');  
         //$this->userModel = $this->model('Users');  
    } */

    //public function index(){ 
      /*if(isLoggedIn()) {
          redirect('posts/');
      } */ 
             
     /* $data = [
          'title'=>'SharePosts',
          'description'=>'Simple social network built on Traversy MCV',
          'posts' => $this->viewModel->getPosts()
      ];  
      $this->view('pages/index', $data);
    }*/
    private $viewModel;
    private $userModel;
    
    public function __construct() {
        
        $this->viewModel = $this->model('Page');
        $this->userModel = $this->model('User');
    }   
    
    public function index() {
        //$data['posts'] = $this->viewModel->getPosts();
        $data = [
          'title'=>'SharePosts',
          'description'=>'Simple social network built on Traversy MCV',
          'posts' => $this->viewModel->getPosts(),
          'lastPosts' => $this->viewModel->getLastPosts()  
        ];
        
        
        $this->view("pages/index",$data);
        
    }

    public function about(){
        
        $data = [
            'title' => 'About Us',
            'description'=> 'App to share posts with other users'
        ];
        
        $this->view('pages/about', $data);
    }
  }