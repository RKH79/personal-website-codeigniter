<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header',array("title" => "صفحه نخست"));
		$this->load->model('home_model');
		$this->load->view('HomePage');
		$this->load->view('templates/footer');
	}
	public function contact()
	{
		$this->load->view('templates/header',array("title" => "ارتباط با ما","msgR"=>"" , "msgG" => ""));
		$_SESSION['msgR'] = $_SESSION['msgG'] = "";
		$this->load->view('contactPage');
		$this->load->view('templates/footer');
	}
	public function newMessage()
	{
		$this->load->model('home_model');
		$this->home_model->newMessage();
		header("Location: .");
	}
}
