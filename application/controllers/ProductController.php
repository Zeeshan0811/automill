<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ProductController extends CI_Controller
{
    static $helper   = array('user_helper');
    public function __construct(){
        parent::__construct();
        $this->load->model('Common_model', 'CommonModel');
        $this->load->helper(self::$helper);
    }
    
    
    public function products(){
        $data['title'] = "Product";

        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/product/product_list.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function addproduct(){
        $data['title'] = "Add Product";
        $data['brands'] = $this->CommonModel->get_data_list_by_single_column('nso_allsetup','type',1);
        $data['productCategory'] = $this->CommonModel->get_data_list_by_single_column('nso_allsetup','type',2);
        $data['mainContent'] = $this->load->view('admin/product/product_add.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

} 