<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

if ($_SESSION['userId'] == null) {
    header("Location: .");
}

class admin extends CI_Controller {

    public function index()
    {
        $this->load->model('admin_model');
        $this->load->view('adminPanel/template/header',array('title'=>'پنل مدیریت'));
        $this->load->view('adminPanel/adminPanel');
        $this->load->view('adminPanel/template/footer',array('page'=>'home'));
    }

    public function logout()
    {
        session_destroy();
        header("Location: .");
    }
}
