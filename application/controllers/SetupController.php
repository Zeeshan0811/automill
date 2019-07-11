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
            $catId = $this->input->post('catId');
            $postBackData['cat_title'] = $this->input->post('cat_title');
            $postBackData['cat_description'] = $this->input->post('cat_description');
            if(!empty($catId)){
                $this->CommonModel->update_data('nso_cateogory',$postBackData, 'cat_id', $catId);
                message("Category(1) has Updated successfully !!");
            }else{
                $this->CommonModel->insert_data('nso_cateogory',$postBackData);
                message("Category(1) has added successfully !!");
            }
            redirect(base_url('category'));
        }
        $data['title'] = "Category";
        $data['categories'] = $this->CommonModel->get_data_list('nso_cateogory','created_at','DESC');
        $data['mainContent'] = $this->load->view('admin/setup/category.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function delCat($id){
        $this->CommonModel->delete_data('nso_cateogory','cat_id',$id);
        message("Category(1) has deleted successfully !!");
        redirect(base_url('category'));
    }


    public function subcategory(){ 
        if(isPostBack()){
            $subcatId = $this->input->post('subcatId');
            $postBackData['type'] = $this->input->post('type');
            $postBackData['title'] = $this->input->post('title');
            if(!empty($subcatId)){
                $this->CommonModel->update_data('nso_allsetup',$postBackData, 'unitId', $subcatId);
                message("Category(1) has Updated successfully !!");
            }else{
                $this->CommonModel->insert_data('nso_allsetup',$postBackData);
                message("Sub-Category(1) has added successfully !!");
            }
            redirect(base_url('subcategory'));
        }
        $data['title'] = "Sub Category";
        $data['categories'] = $this->CommonModel->get_data_list('nso_cateogory','created_at','DESC');
        $data['subcategories'] = $this->CommonModel->get_data_list_with_join('nso_allsetup','nso_cateogory','cat_id','type','nso_allsetup.created_at','DESC');
        $data['mainContent'] = $this->load->view('admin/setup/subcategory.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }


    public function delSubCat($id){
        $this->CommonModel->delete_data('nso_allsetup','unitId',$id);
        message("Sub-Category(1) has deleted successfully !!");
        redirect(base_url('subcategory'));
    }



    // public function godowns(){
    //     $data['title'] = "Godown Lists";
    //     $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
    //     $data['mainContent'] = $this->load->view('admin/godown/godown_list.php', $data, true);
    //     $this->load->view('admin_master_templete', $data);
    // }

    // public function addgodown(){
    //     $data['title'] = "Add Godown";
    //     $data['mainContent'] = $this->load->view('admin/godown/godown_add.php', $data, true);
    //     $this->load->view('admin_master_templete', $data);
    // }






    
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