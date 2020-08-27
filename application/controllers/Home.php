<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class Home extends CI_Controller {
	public function index()
	{
		$this->load->library('jdf');
		$this->load->model('home_model');
		$this->load->view('templates/header',array("title" => "صفحه نخست"));
		$this->load->view('HomePage');
		$this->load->view('templates/footer');
	}
	public function contact()
	{
		$this->load->view('templates/header',array("title" => "ارتباط با ما"));
		$this->load->view('contactPage');
		$this->load->view('templates/footer');
	}
	public function projectDetail($id)
	{
		$this->load->library('jdf');
		$this->load->model('home_model');
		$details = $this->home_model->projectDetail($id);
		$this->load->view('templates/header',array("title" => "" ));
		$this->load->view('projectDetailPage',array('data' => $details));
		$this->load->view('templates/footer');
	}
	public function newMessage()
	{
		$this->load->model('home_model');
		$this->home_model->newMessage();
	}
	public function newComment($id)
	{
		$this->load->model('home_model');
		$this->home_model->newComment($id);
	}
	public function login()
	{
		if (isset($_POST['email'])) {
			$this->load->model('home_model');
			$this->home_model->login();
			$this->load->view('loginPage');
		}
		else {
			$this->load->view('loginPage');
		}
	}
}
