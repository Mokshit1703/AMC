<?php

    class User_model extends CI_model{

        function index($formarray){
            $this->load->view('index/'.$index, $data);
        }
        function addnewcustomer($formarray){
            $this->db->insert('new_customer',$formarray);
        }
        function managecustomer(){
            return $new_customer = $this->db->get('new_customer')->result_array();
        }
    }
?>