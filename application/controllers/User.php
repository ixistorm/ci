<?php

class User extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/header');
		$this->load->view('user/user');
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
