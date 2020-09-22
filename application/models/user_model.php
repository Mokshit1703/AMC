<?php

    class User_model extends CI_model{

        function index($fromarray,$index,$data){
            $this->load->view('index/'.$index, $data);
        }
        function product_amc(){
            return $new_customer = $this->db->get('new_customer')->result_array();
        }
        function service_amc(){
            return $new_customer = $this->db->get('new_customer')->result_array();
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
        function addnewcustomer($fromarray){
            $this->db->insert('new_customer',$fromarray);
        }
        function addproductgroup($fromarray){
            $this->db->insert('new_product_group',$fromarray);
        }
        function addproductmodel($fromarray){
            $this->db->insert('new_product_model',$fromarray);
        }
        function addproductserial($fromarray){
            $this->db->insert('new_product_serial',$fromarray);
        }
        function addproduct($fromarray){
            $this->db->insert('new_product',$fromarray);
        }
        function addnewexecutive($fromarray)
        {
            $this->db->insert('new_executive',$fromarray);
            //$this->db->insert('new_executive',$fromarray);
        }
        function update_customer($userid,$fromarray)
        {
            $this->db->where('sr_no',$userid);
            $this->db->update('new_customer',$fromarray);  //  update users SET name=? ,email = ? where sr_no = ?;
        }
        function update_executive($userid,$fromarray)
        {
            $this->db->where('sr_no',$userid);
            $this->db->update('new_executive',$fromarray);  //  update users SET name=? ,email = ? where sr_no = ?;
        }
        function update_product($userid,$fromarray)
        {
            $this->db->where('sr_no',$userid);
            $this->db->update('new_product',$fromarray);  //  update users SET name=? ,email = ? where sr_no = ?;
        }
        function update_product_group($userid,$fromarray)
        {
            $this->db->where('sr_no',$userid);
            $this->db->update('new_product_group',$fromarray);  //  update users SET name=? ,email = ? where sr_no = ?;
        }
        function update_product_model($userid,$fromarray)
        {
            $this->db->where('sr_no',$userid);
            $this->db->update('new_product_model',$fromarray);  //  update users SET name=? ,email = ? where sr_no = ?;
        }
        function update_product_serial($userid,$fromarray)
        {
            $this->db->where('sr_no',$userid);
            $this->db->update('new_product_serial',$fromarray);  //  update users SET name=? ,email = ? where sr_no = ?;
        }
        function delete_customer($userid)
        {
            $this->db->where('sr_no',$userid);
            $this->db->delete('new_customer');
        }
        function delete_executive($userid)
        {
            $this->db->where('sr_no',$userid);
            $this->db->delete('new_executive');
        }
        function delete_product($userid)
        {
            $this->db->where('sr_no',$userid);
            $this->db->delete('new_product');
        }
        function delete_product_group($userid)
        {
            $this->db->where('sr_no',$userid);
            $this->db->delete('new_product_group');
        }
        function delete_product_model($userid)
        {
            $this->db->where('sr_no',$userid);
            $this->db->delete('new_product_model');
        }
        function delete_product_serial($userid)
        {
            $this->db->where('sr_no',$userid);
            $this->db->delete('new_product_serial');
        }
        function get_customer($userid)
        {
            $this->db->where('sr_no',$userid);
            return $user = $this->db->get('new_customer')->row_array();  // select * from users where sr_no = ?;
        }
        function get_executive($userid)
        {
            $this->db->where('sr_no',$userid);
            return $user = $this->db->get('new_executive')->row_array();  // select * from users where sr_no = ?;
        }
        function get_product($userid)
        {
            $this->db->where('sr_no',$userid);
            return $user = $this->db->get('new_product')->row_array();  // select * from users where sr_no = ?;
        }
        function get_product_group($userid)
        {
            $this->db->where('sr_no',$userid);
            return $user = $this->db->get('new_product_group')->row_array();  // select * from users where sr_no = ?;
        }
        function get_product_model($userid)
        {
            $this->db->where('sr_no',$userid);
            return $user = $this->db->get('new_product_model')->row_array();  // select * from users where sr_no = ?;
        }
        function get_product_serial($userid)
        {
            $this->db->where('sr_no',$userid);
            return $user = $this->db->get('new_product_serial')->row_array();  // select * from users where sr_no = ?;
        }

    }
?>