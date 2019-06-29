<?php

defined('BASEPATH') or exit('No direct script access allowed');

class FrontendController extends CI_Controller
{
    static $helper   = array('user_helper');
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_model', 'CommonModel');
        $this->load->helper(self::$helper);
    }

    public function index()
    {   
        $data['title'] = "";
        $data['mainContent'] = $this->load->view('frontend/index.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }
 

}