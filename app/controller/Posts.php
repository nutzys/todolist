<?php

class Posts extends Controller{
    public function __construct(){
        $this->postModel = $this->model('Post');
    }
    public function all(){
        
        $data = [
            'posts' => $this->postModel->all($_SESSION['id'])
        ];
        return $this->view('posts/all', $data);
    }

    public function create(){
        return $this->view('posts/create');
    }

    public function store(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'end' => $_POST['end'],
                'id' => $_SESSION['id']
            ];

            $this->postModel->store($data);
            redirect('posts/all');
        }
    }
    //Load view
    public function edit($id){
        $post = $this->postModel->getPost($id);
        $data = [
            'title' => $post->title,
            'description' => $post->description,
            'end' => $post->end,
            'id' => $id
        ];
        return $this->view('posts/edit', $data);
    }

    //Update / redirect
    public function update(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'end' => $_POST['end'],
                'id' => $_POST['id']
            ];

            $this->postModel->update($data);

            redirect('posts/all');
        }
    }

    public function delete($id){ 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->postModel->delete($id);
            redirect('posts/all');
        }
    }
}