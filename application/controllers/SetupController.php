<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SetupController extends CI_Controller
{
    static $helper   = array('user_helper');
    public function __construct(){
        parent::__construct();
        $this->load->model('Common_model', 'CommonModel');
        $this->load->helper(self::$helper);
    }

    public function category(){ 
        if(isPostBack()){
            $postBackData['cat_title'] = $this->input->post('cat_title');
            $postBackData['cat_description'] = $this->input->post('cat_description');
            $this->CommonModel->insert_data('nso_cateogory',$postBackData);
            message("Category(1) has added successfully !!");
            redirect(base_url('category'));
        }
        $data['title'] = "Category";
        $data['categories'] = $this->CommonModel->get_data_list('nso_cateogory','created_at','DESC');
        $data['mainContent'] = $this->load->view('admin/setup/category.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function subcategory(){ 
        $data['title'] = "Sub Category";
        $data['subcategories'] = $this->CommonModel->get_data_list('nso_allsetup','created_at','DESC');
        $data['mainContent'] = $this->load->view('admin/setup/subcategory.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function products(){
        $data['title'] = "Product";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/product/product_list.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function addproduct(){
        $data['title'] = "Add Product";
        $data['mainContent'] = $this->load->view('admin/product/product_add.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function trucks(){
        $data['title'] = "Truck List";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/truck/truck_list.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function addtruck(){
        $data['title'] = "Add Truck";
        $data['mainContent'] = $this->load->view('admin/truck/truck_add.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function godowns(){
        $data['title'] = "Godown Lists";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/godown/godown_list.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function addgodown(){
        $data['title'] = "Add Godown";
        $data['mainContent'] = $this->load->view('admin/godown/godown_add.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function accounts(){
        $data['title'] = "Account List";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/account/account_list.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function addaccount(){
        $data['title'] = "Add Account";
        $data['mainContent'] = $this->load->view('admin/account/account_add.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function balancetransfer(){
        $data['title'] = "Balance Transfer";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/account/account_balance_transer.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function balancesheet(){
        $data['title'] = "Balance Sheet";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/account/account_balance_sheet.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }
    public function transectionhistory(){
        $data['title'] = "Balance History";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/account/account_transection_history.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function production(){
        $data['title'] = "Production";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/action/production.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }
    public function producttransfer(){
        $data['title'] = "Product Transfer";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/product/product_transfer.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }
    public function totalinventory(){
        $data['title'] = "Total Inventory";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/product/product_total_inventory.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }
    public function inventoryhistory(){
        $data['title'] = "Product Transfer";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/product/product_inventory_history.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function purchase(){
        $data['title'] = "Pruchase";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/action/purchase.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }
    public function sell(){
        $data['title'] = "Sell";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/action/sell.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }
    public function expense(){
        $data['title'] = "Expense";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/action/expense.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }
 

}