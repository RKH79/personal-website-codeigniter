<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    function sliderData(){
        $this->load->database();
        $this->db->from('projects');
        $this->db->where(array ('images.master'=>1));
        $this->db->join('images', 'projects.id = images.projectId');
        return $this->db->get()->result_object();
    }
    public function projectDetail($id)
    {
        try {
            $this->load->database();
            $detail = $this->db->get_where('projects',array ('id'=>$id))->result_object();
            $this->db->from('images');
            $this->db->where(array ('projectId'=>$id));
            $this->db->order_by("master", "DESC");
            $images = $this->db->get()->result_object();
            return array('detail'=>$detail,'images'=>$images);
        } catch (\Throwable $th) {
            $_SESSION['msgR'] = "متاسفانه مشکلی در سیستم رخ داده است";
            return false;
        }
    }
    public function records()
    {
        $this->load->database();
        return $this->db->get_where('records',array ('status'=>1))->result_object();
    }
    public function comments($id)
    {
        $this->load->database();
        return $this->db->get_where('comments',array ('projectId'=>$id ,'status'=>1))->result_object();
    }
    function newMessage()
    {
        try {
            $this->load->database();
            $message = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'message' => $_POST['message']
            );
            $this->db->insert('messages', $message);
            $_SESSION['msgG'] = "!پیام شما با موفقیت ارسال شد";
        } catch (\Throwable $th) {
            $_SESSION['msgR'] = "!!متاسفانه در ارسال پیام مشکلی پیش آمده است";
        }
    }
    function newComment($id)
    {
        try {
            $this->load->database();
            $comment = array(
                'ProjectId' => $id,
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'comment' => $_POST['comment']
            );
            $this->db->insert('comments', $comment);
            $_SESSION['msgG'] = "!پیام شما با موفقیت ارسال شد";
        } catch (\Throwable $th) {
            $_SESSION['msgR'] = "!!متاسفانه در ارسال پیام مشکلی پیش آمده است";
        }
    }
    public function login()
    {
        $this->load->database();
        $password = sha1(md5($_POST['password']));
        $user = $this->db->get_where('users',array('email'=>$_POST['email'],'password'=>$password))->result_object();
        if (isset($user['0']->id)) {
            $_SESSION['userId'] = $user['0']->id;
            $_SESSION['msgG'] = ".خوش آمدید";
            return true;
        }
        else {
            $_SESSION['msgR'] = "!!نام کاربری یا رمز عبور اشتباه است";
            return false;
        }
    }
}
?>