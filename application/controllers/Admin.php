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
        $this->load->view('adminPanel/template/header',array('title'=>'مدیریت پروژه ها','removeAlertText'=>'آیا پروژه حذف شود؟'));
        $this->load->view('adminPanel/projects', array('projects'=>$projects));
        $this->load->view('adminPanel/template/footer',array('page'=>'projects'));
    }
    public function projectOperation($id)
    {
        $this->load->model('admin_model');
        if (isset($_POST['Id'])) {
            if ($_POST['Id'] == "") { //insert
                $insertId = $this->admin_model->projectInsert();
                $this->admin_model->insertProjectImage($insertId);
            }
            else { //update
                $this->admin_model->projectUpdate();
                $this->admin_model->insertProjectImage($_POST['Id']);
            }
            header("Location: projects");
        }
        else { //return view
            $project = $this->admin_model->project($id);
            $projectImages = $this->admin_model->projectImages($id);
            $this->load->view('adminPanel/template/header',array('title'=>'مدیریت پروژه ها'));
            $this->load->view('adminPanel/projectOperation', array('project'=>$project,'projectImages'=>$projectImages));
            $this->load->view('adminPanel/template/footer',array('page'=>'projects'));
        }
    }
    public function removeProject($id)
    {
        if ($id!="") {
            $this->load->model('admin_model');
            $this->admin_model->projectRemove($id);
            $projectImages = $this->admin_model->projectImages($id);
            foreach ($projectImages as $projectImage) {
                unlink("assets/images/sliderImage/".$projectImage->url);
                $this->admin_model->removeProjectImage($projectImage->url);
            }
        }
        header("Location: projects");
    }
    public function uploadProjectImage()
    {
        if(isset($_FILES['file-select'])) {
            $file = $_FILES['file-select']['tmp_name'];
            $sourceProperties = getimagesize($file);
            $imageType = $sourceProperties[2];
            date_default_timezone_set("Asia/Tehran");
            $fileNewName = date("Y-m-d_H-i-s__") . rand(1,1000);
            $folderPath = "assets/images/sliderImage/";
            $ext = pathinfo($_FILES['file-select']['name'], PATHINFO_EXTENSION);
            switch ($imageType) {
                case IMAGETYPE_PNG:
                    imagepng(imagecreatefrompng($file),$folderPath. $fileNewName. ".". $ext);
                    break;
                case IMAGETYPE_JPEG:
                    imagejpeg(imagecreatefromjpeg($file),$folderPath. $fileNewName. ".". $ext);
                    break;
                default:
                    echo "Invalid Image type.";
                    exit;
                    break;
            }
            echo "$fileNewName.$ext";
        }
    }
    public function removeProjectImage()
    {
        if (isset($_POST['url'])) {
            if(is_file("assets/images/sliderImage/".$_POST['url']))
                unlink("assets/images/sliderImage/".$_POST['url']);
            $this->load->model('admin_model');
            $this->admin_model->removeProjectImage($_POST['url']);
        }
    }
    public function comments()
    {
        $this->load->library('jdf');
        $this->load->model('admin_model');
        $comments = $this->admin_model->comments();
        $this->load->view('adminPanel/template/header',array('title'=>'مدیریت نظرات','removeAlertText'=>'آیا نظر حذف شود؟'));
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
        $this->load->view('adminPanel/template/header',array('title'=>'مدیریت پیام ها','removeAlertText'=>'آیا پیام حذف شود؟'));
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
    public function records()
    {
        $this->load->library('jdf');
        $this->load->model('admin_model');
        $records = $this->admin_model->records();
        $this->load->view('adminPanel/template/header',array('title'=>'مدیریت رکورد ها','removeAlertText'=>'آیا رکورد حذف شود؟'));
        $this->load->view('adminPanel/records', array('records'=>$records));
        $this->load->view('adminPanel/template/footer',array('page'=>'recordsManage'));
    }
    public function recordOperation($id)
    {
        $this->load->model('admin_model');
        if (isset($_POST['Id'])) {
            if ($_POST['Id'] == "") { //insert
                $filename = $this->admin_model->uploadFile();
                $this->admin_model->recordInsert($filename);
            }
            else { //update
                if ($_FILES['file'] != null) {
                    $filename = $this->admin_model->uploadFile();
                }else {
                    $filename = $_POST['oldFile'];
                }
                $this->admin_model->recordUpdate($filename);
            }
            header("Location: recordsManage");
        }
        else { //return view
            $record = $this->admin_model->record($id);
            $this->load->view('adminPanel/template/header',array('title'=>'مدیریت رکورد ها'));
            $this->load->view('adminPanel/recordOperation', array('record'=>$record));
            $this->load->view('adminPanel/template/footer',array('page'=>'recordsManage'));
        }
    }
    public function removeRecord($id)
    {
        $this->load->model('admin_model');
        $record = $this->admin_model->record($id);
        unlink("assets/uploads/".$record[0]->link);
        $this->admin_model->recordRemove($id);
        header("Location: recordsManage");
    }
    public function recordStatus($id)
    {
        $this->load->model('admin_model');
        $this->admin_model->recordStatus($id);
        header("Location: recordsManage");
    }
}
