<?php

class User extends CI_Controller
{
    // application/controllers/User.php
    public function index()
    {
        $this->load->model('user_model');
        $users = $this->user_model->getUser();
        $data = array(
        'users' => $users
    );
        $this->load->view('layout/header');
        $this->load->view('user/user', $data);
        $this->load->view('layout/footer');
    }

   

    public function addUser()
    {
        $this->load->view('layout/header');
        $this->load->view('user/adduser');
        $this->load->view('layout/footer');
    }
    //public function addUser()
    //{
       // $this->load->view('add_user');
    //}

    // public function sayMyName($name = "Pokin",$sname = "Inkongngam"){
    //     /*$name = "ท่านกบ";*/
    //     echo "Your Name is :"  .$name;
    //     echo " "  .$sname;
    // }
}
