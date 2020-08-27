<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
if ($_SESSION['userId'] == null) {
    header("Location: .");
}

class admin extends CI_Controller {

    public function index()
    {
        
    }
}
