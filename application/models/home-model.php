<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function sliderData(){
        $this->load->database();
        return $this->db->query("SELECT * FROM `slider`")->result_object();
    }
}
?>