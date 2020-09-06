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
    public function projects()
    {
        $this->load->library('jdf');
        $this->load->model('admin_model');
        $projects = $this->admin_model->projects();
        $this->load->view('adminPanel/template/header',array('title'=>'مدیریت پروژه ها'));
        $this->load->view('adminPanel/projects', array('projects'=>$projects));
        $this->load->view('adminPanel/template/footer',array('page'=>'projects'));
    }

    public function comments()
    {
        $this->load->library('jdf');
        $this->load->model('admin_model');
        $comments = $this->admin_model->comments();
        $this->load->view('adminPanel/template/header',array('title'=>'مدیریت نظرات'));
        $this->load->view('adminPanel/comments', array('comments'=>$comments));
        $this->load->view('adminPanel/template/footer',array('page'=>'comments'));
    }

    public function statusComment($id)
    {
        $this->load->model('admin_model');
        $this->admin_model->statusComment($id);
        header("Location: comments");
    }

    public function deleteComment($id)
    {
        $this->load->model('admin_model');
        $this->admin_model->deleteComment($id);
        header("Location: comments");
    }

    public function messages()
    {
        $this->load->library('jdf');
        $this->load->model('admin_model');
        $messages = $this->admin_model->messages();
        $this->load->view('adminPanel/template/header',array('title'=>'مدیریت پیام ها'));
        $this->load->view('adminPanel/messages', array('messages'=>$messages));
        $this->load->view('adminPanel/template/footer',array('page'=>'messages'));
    }

    public function deleteMessage($id)
    {
        $this->load->model('admin_model');
        $this->admin_model->deleteMessage($id);
        header("Location: messages");
    }

    public function logout()
    {
        session_destroy();
        header("Location: .");
    }
}
