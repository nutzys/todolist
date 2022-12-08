<?php

class Users extends Controller{

    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function login(){
        $data = [
            'name' => '',
            'password' => ''
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'name' => $_POST['name'],
                'password' => $_POST['password']
            ];

            $user = $this->userModel->login($data['name'], $data['password']);

            if($user){
                self::startSession($user);
            }
            
        }
        return $this->view('users/login', $data);
    }

    public function startSession($user){
        $_SESSION['name'] = $user->name;
        $_SESSION['id'] = $user->id;
        return redirect('posts/all');
    }
}