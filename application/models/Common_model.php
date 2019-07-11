<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Common_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    
    function tableRow($table, $column, $columnValue) {
        return $this->db->get_where($table, array($column => $columnValue))->row();
    }

    function tableSingleRow($table) {
        return $this->db->get($table)->row();
    }

    function existing_check($table,$where){
       return $this->db->select('*')->where($where)->get($table)->row();
    }


    // add new data into a database table
    function insert_data($table_name, $data) {
        $this->db->insert($table_name, $data);
        return $this->db->insert_id();
    } 

    // Insert Multiple data at once in a database table 
    function insert_batch($table_name, $data) {
        $this->db->insert_batch($table_name, $data);
        return $this->db->affected_rows();
    } 

     
    // update data by id of a database table
    function update_data($table_name, $data, $column_name, $column_value) {
        $this->db->where($column_name, $column_value);
        $this->db->update($table_name, $data);
        return $this->db->affected_rows();
    }

    // delete data by id of a database table
    function delete_data($table_name, $column_name, $column_value) {
        $this->db->where($column_name, $column_value);
        $this->db->delete($table_name);
        return $this->db->affected_rows();
    }

    // delete data by id of a database table
    function delete_data_by_multi_columns($table_name, $where) {
        $this->db->where($where);
        $this->db->delete($table_name);
        return $this->db->affected_rows();
    }

    // get data list by single column of a database table
    function get_data_list_by_single_column($table_name, $column_name, $column_value, $order_column_name = NULL, $order = NULL, $start_limit = NULL, $per_page = NULL) {
        if (isset($order_column_name) && isset($order))
            $this->db->order_by($order_column_name, $order);
        if (isset($start_limit))
            $this->db->limit($per_page, $start_limit);
        $this->db->where($column_name, $column_value);
        return $this->db->get($table_name)->result();
    }

    // get data list by Multiple column of a database tabl
    function get_data_list_by_multiple_columns($table_name, $select_columns, $where , $order_column_name = NULL, $order = NULL) {
        $this->db->select($select_columns);
        $this->db->from($table_name);
        $this->db->where($where);
        if (isset($order_column_name) && isset($order))
            $this->db->order_by($order_column_name, $order);
        return $this->db->get()->result();
    }
    
    
    // get all data list of a database table
    function get_data_list($table_name, $order_column_name = NULL, $order = NULL, $start_limit = NULL, $per_page = NULL , $where = NULL, $sorting= NULL) {
        if (isset($order_column_name) && isset($order))
            $this->db->order_by($order_column_name, $order);
        if (isset($where))
            $this->db->where($where);
        if (isset($start_limit))
            $this->db->limit($per_page, $start_limit);
        if (!empty($sorting))
            $this->db->order_by($sorting['field'],$sorting['type']);
        
        return $this->db->get($table_name)->result();
    }


    // Get Single row 
    function table_info($table, $column_name, $column_value) {
        $query = $this->db->get_where($table, array($column_name => $column_value));
        return $query->row();
    }

    // Get Single cell 
    function table_info_data($select, $table, $column_name, $column_value) {
        $query = $this->db->select($select)->get_where($table, array($column_name => $column_value));
        return $query;
    }




    // Get data list with joining table 
    function get_data_list_with_join($table_name, $join_to, $field_name, $match_to, $sortingField = NULL, $sortingType = NULL , $groupBy= null, $where = null){
        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->join($join_to, $join_to.'.'.$field_name .'='. $table_name.'.'.$match_to);
        if (!empty($sortingType)){
            $this->db->order_by($sortingField,$sortingType);
        }
        if (isset($groupBy))
            $this->db->group_by($groupBy);
        if(isset($where))
            $this->db->where($where);
        return $this->db->get()->result();
    }

    // get single data by single column of a database table
    function get_single_data_by_single_column($table_name, $column_name, $column_value) {
        $this->db->where($column_name, $column_value);
        return $this->db->get($table_name)->row();
    }

    // get single data by many columns of a database table
    function get_data_list_by_many_columns($table_name, $column_array, $order_column_name = NULL, $order = NULL, $start_limit = NULL, $per_page = NULL) {
        $this->db->where($column_array);
        if (isset($order_column_name) && isset($order))
            $this->db->order_by($order_column_name, $order);
        if (isset($start_limit))
            $this->db->limit($per_page, $start_limit);
        return $this->db->get($table_name)->result();
    }

    // get single data by many columns of a database table
    function get_single_data_by_many_columns($table_name, $column_array, $order_column_name = null, $order = null) {
        $this->db->where($column_array);
        if (isset($order_column_name) && isset($order))
            $this->db->order_by($order_column_name, $order);
            return $this->db->get($table_name)->row();
    }

    // Get data list of single Column
    function get_data_list_of_single_column($table_name,$column_Name, $group_by = Null){
        $this->db->select($column_Name);
        $this->db->from($table_name);
        if (isset($group_by))
            $this->db->group_by($group_by);
        return $this->db->get()->result();

    }
    

    //Get Last Row ID from a database table 
    function get_last_row_id($table_name, $id){
        $result = $this->db->select($id)->order_by($id,"desc")->limit(1)->get($table_name)->row();
        return $result;
    }

    // get number of rows of a database table
    function count_all_data($table_name) {
        return $this->db->count_all($table_name);
    }



    // Transelate number into word
    function translate_to_words($number) {
        // zero is a special case, it cause problems even with typecasting if we don't deal with it here
        $max_size = pow(10, 18);
        if (!$number)
            return "zero";
        if (is_int($number) && $number < abs($max_size)) {
            $prefix = '';
            $suffix = '';
            switch ($number) {
                // setup up some rules for converting digits to words
                case $number < 0:
                    $prefix = "negative";
                    $suffix = $this->translate_to_words(-1 * $number);
                    $string = $prefix . " " . $suffix;
                    break;
                case 1:
                    $string = "one";
                    break;
                case 2:
                    $string = "two";
                    break;
                case 3:
                    $string = "three";
                    break;
                case 4:
                    $string = "four";
                    break;
                case 5:
                    $string = "five";
                    break;
                case 6:
                    $string = "six";
                    break;
                case 7:
                    $string = "seven";
                    break;
                case 8:
                    $string = "eight";
                    break;
                case 9:
                    $string = "nine";
                    break;
                case 10:
                    $string = "ten";
                    break;
                case 11:
                    $string = "eleven";
                    break;
                case 12:
                    $string = "twelve";
                    break;
                case 13:
                    $string = "thirteen";
                    break;
                // fourteen handled later
                case 15:
                    $string = "fifteen";
                    break;
                case $number < 20:
                    $string = $this->translate_to_words($number % 10);
                    // eighteen only has one "t"
                    if ($number == 18) {
                        $suffix = "een";
                    } else {
                        $suffix = "teen";
                    }
                    $string .= $suffix;
                    break;
                case 20:
                    $string = "twenty";
                    break;
                case 30:
                    $string = "thirty";
                    break;
                case 40:
                    $string = "forty";
                    break;
                case 50:
                    $string = "fifty";
                    break;
                case 60:
                    $string = "sixty";
                    break;
                case 70:
                    $string = "seventy";
                    break;
                case 80:
                    $string = "eighty";
                    break;
                case 90:
                    $string = "ninety";
                    break;
                case $number < 100:
                    $prefix = $this->translate_to_words($number - $number % 10);
                    $suffix = $this->translate_to_words($number % 10);
                    //$string = $prefix . "-" . $suffix;
                    $string = $prefix . " " . $suffix;
                    break;
                // handles all number 100 to 999
                case $number < pow(10, 3):
                    // floor return a float not an integer
                    $prefix = $this->translate_to_words(intval(floor($number / pow(10, 2)))) . " hundred";
                    if ($number % pow(10, 2))
                        $suffix = " and " . $this->translate_to_words($number % pow(10, 2));
                    $string = $prefix . $suffix;
                    break;
                case $number < pow(10, 6):
                    // floor return a float not an integer
                    $prefix = $this->translate_to_words(intval(floor($number / pow(10, 3)))) . " thousand";
                    if ($number % pow(10, 3))
                        $suffix = $this->translate_to_words($number % pow(10, 3));
                    $string = $prefix . " " . $suffix;
                    break;
            }
        } else {
            echo "ERROR with - $number Number must be an integer between -" . number_format($max_size, 0, ".", ",") . " and " . number_format($max_size, 0, ".", ",") . " exclussive.";
        }
        return $string;
    }
 
     public function update($table, $data, $id)
     {
         $this->db->update($table, $data, $id);        
     }
 
     public function destroy($table, $where)
     {
         $this->db->delete($table, $where);        
     }


    public function countAll($table, $where = array())
    {
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where($where); 
    return $this->db->count_all_results();
    }

    function get_data_list_by_single_columns($table_name, $column_name, $column_value, $order_column_name = NULL, $order = NULL, $start_limit = NULL, $per_page = NULL) {
        if (isset($order_column_name) && isset($order))
        $this->db->order_by($order_column_name, $order);
        if (isset($start_limit))
        $this->db->limit($per_page, $start_limit);
        $this->db->where($column_name, $column_value);
        return $this->db->get($table_name)->row();
    }
        
    function get_data_lists($table_name, $order_column_name = NULL, $order = NULL, $start_limit = NULL, $per_page = NULL) {
        if (isset($order_column_name) && isset($order))
        $this->db->order_by($order_column_name, $order);
        if (isset($start_limit))
        $this->db->limit($per_page, $start_limit);
        // if (!empty($sorting))
        // $this->db->order_by($sorting['field'], $sorting['type']);
        
        return $this->db->get($table_name)->row();
    }




    function get_product_list() {
        $this->db->select('*, cat_table.title as category_title, brand_table.title as brand_title');
        $this->db->from('nso_product');
        $this->db->join('nso_allsetup as cat_table', 'cat_table.unitId = nso_product.category');
        $this->db->join('nso_allsetup as brand_table', 'brand_table.unitId = nso_product.brand');
        $this->db->order_by('nso_product.createdAt', 'DESC');
        return $this->db->get()->result();
    }









}
