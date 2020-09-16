<?php

    class User_model extends CI_model{

        function index($formarray,$index,$data){
            $this->load->view('index/'.$index, $data);
        }
        function managecustomer(){
            return $new_customer = $this->db->get('new_customer')->result_array();
        }
        function manageexecutive(){
            return $new_executive = $this->db->get('new_executive')->result_array();
        }
        function manage_product(){
            return $new_product = $this->db->get('new_product')->result_array();
        }
        function manage_product_group(){
            return $new_product_group = $this->db->get('new_product_group')->result_array();
        }
        function manage_product_model(){
            return $new_product_model = $this->db->get('new_product_model')->result_array();
        }
        function manage_product_serial(){
            return $new_product_serial = $this->db->get('new_product_serial')->result_array();
        }
        function addnewcustomer($formarray){
            $this->db->insert('new_customer',$formarray);
        }
        function addproductgroup($formarray){
            $this->db->insert('new_product_group',$formarray);
        }
        function addproductmodel($formarray){
            $this->db->insert('new_product_model',$formarray);
        }
        function addproductserial($formarray){
            $this->db->insert('new_product_serial',$formarray);
        }
        function addproduct($formarray){
            $this->db->insert('new_product',$formarray);
        }
        function addnewexecutive($formarray)
        {
            $this->db->insert('new_executive',$formarray);
            //$this->db->insert('new_executive',$formarray);
        }
    }
?>