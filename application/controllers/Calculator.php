<?php

class Calculator extends CI_Controller
{
    public function plus($ask1= 0,$ask2= 0)
    {
        echo "คำตอบที่ 1 คือ :".$ask1 .'<br>';
        echo "คำตอบที่ 2 คือ :".$ask2 .'<br>';
        echo "ผลลัพธ์" .$ask1. "+" .$ask2. "คือ". ($ask1 + $ask2) ;
    }
}
