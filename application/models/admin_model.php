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
    public function projects()
    {
        $this->load->database();
        $this->db->from('projects');
        $this->db->where(array ('images.master'=>1));
        $this->db->join('images', 'projects.id = images.projectId');
        return $this->db->get()->result_object();
    }
    public function comments()
    {
        $this->load->database();
        $this->db->from('comments');
        $this->db->join('projects','projects.id = comments.projectId');
        $this->db->join('images', 'projects.id = images.projectId');
        $this->db->where(array ('images.master'=>1));
        return $this->db->get()->result_object();
    }
}
