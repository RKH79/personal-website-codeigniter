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
        $this->db->select('projects.id,images.url,projects.projectDate,projects.description,projects.title');
        $this->db->from('projects');
        $this->db->where(array ('images.master'=>1));
        $this->db->join('images', 'projects.id = images.projectId');
        return $this->db->get()->result_object();
    }
    public function project($id)
    {
        $this->load->database();
        return $this->db->get_where('projects',array('id'=>$id))->result_object();
    }
    public function projectImages($id)
    {
        $this->load->database();
        $this->db->order_by("master", "DESC");
        return $this->db->get_where('images',array('projectId'=>$id))->result_object();
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
    public function statusComment($id)
    {
        try {
            $this->load->database();
            $this->db->set('status','!status',false);
            $this->db->where('id', $id);
            $this->db->update('comments');
            $_SESSION['msgG']="!ویرایش با موفقیت انجام شد";
        } catch (\Throwable $th) {
            $_SESSION['msgR']="!مشکلی در سیستم رخ داده است".$th;
        }
    }
    public function deleteComment($id)
    {
        try {
            $this->load->database();
            $this->db->delete('comments',array('id'=>$id));
            $_SESSION['msgG']="!!نظر با موفقت حذف شد";
        } catch (\Throwable $th) {
            $_SESSION['msgR']="!مشکلی در سیستم رخ داده است";
        }
    }
    public function messages()
    {
        $this->load->database();
        return $this->db->get('messages')->result_object();
    }
    public function deleteMessage($id)
    {
        try {
            $this->load->database();
            $this->db->delete('messages',array('id'=>$id));
            $_SESSION['msgG']="!!پیام با موفقت حذف شد";
        } catch (\Throwable $th) {
            $_SESSION['msgR']="!مشکلی در سیستم رخ داده است";
        }
    }
}
