<?php

class UsersController extends BaseController
{
    public function index()
    {
        $this->authorize();
        $this->users = $this->model->getAll();
    }

    public function edit(int $id)
    {
        if($this->isPost){
            //Edit the request post (update its fields)
            $username = $_POST['username'];
            if(strlen($username) < 2){
                $this->setValidationError("username", "Username cannot be empty!");
            }
            $full_name = $_POST['full_name'];
            if(strlen($full_name) < 2){
                $this->setValidationError("full_name", "FullName cannot be empty!");
            }

            if($this->formValid()){
                if($this->model->edit($id, $username, $full_name)){
                    $this->addInfoMessage("User edited");
                }else{
                    $this->addErrorMessage("Error: cannot edit user.");
                }
                $this->redirect('users');
            }

        }

        //HTTP GET
        //Show "confirm delete" form
        $user = $this->model->getById($id);
        if(! $user){
            $this->addErrorMessage("Error: post does not exist. ");
            $this->redirect("users");
        }
        $this->user = $user;

    }

    public function login()
    {
        if($this->isPost){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userId = $this->model->login($username, $password);

            if($userId !== false) {
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $userId;
                $this->addInfoMessage("Login successful.");
                $this->redirect("");
            }else{
                $this->addErrorMessage("Error: Login Failed");
            }
        }
    }

    public function register()
    {
		if($this->isPost) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $full_name = $_POST['full_name'];

            if (strlen($username) <= 1) {
                $this->setValidationError("username", "Username invalid");
            }

            if (strlen($password) <= 1) {
                $this->setValidationError("password", "Password is too short");
            }

            if ($password != $password_confirm) {
                $this->setValidationError("password_confirm", "Password do not match");
                return;
            }

            if ($this->formValid()) {
                $userId = $this->model->register($username, $password, $full_name);
                if ($userId !== false) {
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $userId;
                    $this->addInfoMessage("Registration successful. ");
                    $this->redirect("");
                } else {
                    $this->addErrorMessage("Error: registration failed.");
                }
            }
        }
    }

    public function logout()
    {
        session_destroy();
        $this->redirect("");
    }


}
