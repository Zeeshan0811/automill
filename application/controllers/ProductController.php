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
        $data['products'] = $this->CommonModel->get_product_list();
        $data['mainContent'] = $this->load->view('admin/product/product_list.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function addproduct(){
        if(isPostBack()){
            $postBackData['category'] = $this->input->post('category');
            $postBackData['brand'] = $this->input->post('brand');
            $postBackData['name'] = $this->input->post('name');
            $postBackData['size'] = $this->input->post('brand');
            $postBackData['purchase_price'] = $this->input->post('purchase_price');
            $postBackData['sale_price'] = $this->input->post('sale_price');
           
            $this->CommonModel->insert_data('nso_product',$postBackData);
            message("Product(1) has added successfully !!");
            redirect(base_url('products'));
        }
        $data['title'] = "Add Product";
        $data['brands'] = $this->CommonModel->get_data_list_by_single_column('nso_allsetup','type',1);
        $data['categories'] = $this->CommonModel->get_data_list_by_single_column('nso_allsetup','type',2);
        $data['mainContent'] = $this->load->view('admin/product/product_add.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function editproduct($id){
        if(isPostBack()){
            $postBackData['category'] = $this->input->post('category');
            $postBackData['brand'] = $this->input->post('brand');
            $postBackData['name'] = $this->input->post('name');
            $postBackData['size'] = $this->input->post('brand');
            $postBackData['purchase_price'] = $this->input->post('purchase_price');
            $postBackData['sale_price'] = $this->input->post('sale_price');
           
            $this->CommonModel->update_data('nso_product',$postBackData,'',$id);
            message("Product(1) has added Updated !!");
            redirect(base_url('editproduct/'.$id));
        }
        $data['title'] = "Edit Product";
        $data['product'] = $this->CommonModel->get_single_data_by_single_colum('nso_product','pro_id',$id);
        $data['brands'] = $this->CommonModel->get_data_list_by_single_column('nso_allsetup','type',1);
        $data['categories'] = $this->CommonModel->get_data_list_by_single_column('nso_allsetup','type',2);
        $data['mainContent'] = $this->load->view('admin/product/product_edit.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function delProduct($id){
        $this->CommonModel->delete_data('nso_product','pro_id',$id);
        message("Product(1) has deleted successfully !!");
        redirect(base_url('products'));
    }

} 