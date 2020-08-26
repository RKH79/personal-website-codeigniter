<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    function sliderData(){
        $this->load->database();
        return $this->db->get("workSample")->result_object();
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
}
?>