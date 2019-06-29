<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    static $helper   = array('user_helper');
    public function __construct(){
        parent::__construct();
        $this->load->model('Common_model', 'CommonModel');
        $this->load->helper(self::$helper);
    }

    public function index(){  
        $data['title'] = "login";
        $this->load->view('admin/login.php', $data);
    }

    public function dashboard(){
        $data['title'] = "Dashboard";
        $data['mainContent'] = $this->load->view('admin/index.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }
 

}