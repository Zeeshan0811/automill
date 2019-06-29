<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HrController extends CI_Controller
{
    static $helper   = array('user_helper');
    public function __construct(){
        parent::__construct();
        $this->load->model('Common_model', 'CommonModel');
        $this->load->helper(self::$helper);
    }

    public function addemployee(){
        $data['title'] = "Add Employee";
        $data['mainContent'] = $this->load->view('admin/employee/employee_add.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }
    public function employees(){
        $data['title'] = "Employee List";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/employee/employee_list.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }
    public function paysalary(){
        $data['title'] = "Pay Salary";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/employee/employee_salary_payment.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }
    public function paymentreport(){
        $data['title'] = "Salary Payment Report";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/employee/employee_payment_report.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }
    public function salarystatement(){
        $data['title'] = "Employee Salary Statement";
        $data['products'] = $this->CommonModel->get_data_list('nso_product','createdAt','DESC');
        $data['mainContent'] = $this->load->view('admin/employee/employee_salary_statement.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }



}