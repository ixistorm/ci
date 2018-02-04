<?php

class User extends CI_Controller
{
    public function index()
    {
        echo "สวัสดีเจ้าคะ";
    }

    public function addUser()
    {
        $this->load->view('add_user');
    }

    // public function sayMyName($name = "Pokin",$sname = "Inkongngam"){
    //     /*$name = "ท่านกบ";*/
    //     echo "Your Name is :"  .$name;
    //     echo " "  .$sname;
    // }
}
