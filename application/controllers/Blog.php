<?php
class Blog extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
    }

    function index(){
        $data['title']   =   "Apasih";
        $data['content'] =   "Konten Tiktok";
        $this->load->view('blog_view',$data);
    }
}