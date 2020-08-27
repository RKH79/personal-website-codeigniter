<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {
    public function userData()
    {
        try {
            $this->load->database();
            return $this->db->get_where('users',array('id'=>$_SESSION['userId']))->result_object();
        } catch (\Throwable $th) {
            $_SESSION['msgR']="!مشکلی در سیستم رخ داده است";
        }
    }
}
