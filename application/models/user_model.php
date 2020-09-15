<?php

    class User_model extends CI_model{

        function index($formarray){
            $this->load->view('index/'.$index, $data);
        }
        function addnewcustomer($formarray){
            $this->db->insert('AMC',$formarray);
        }
    }
?>