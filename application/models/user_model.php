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
        function updatecustomer($userid,$fromArray)
        {
            $this->db->where('user_id',$userid);
            $this->db->update('new_customer',$fromArray);  //  update users SET name=? ,email = ? where user_id = ?;
        }
        function updateexecutive($userid,$fromArray)
        {
            $this->db->where('user_id',$userid);
            $this->db->update('new_executive',$fromArray);  //  update users SET name=? ,email = ? where user_id = ?;
        }
        function update_product($userid,$fromArray)
        {
            $this->db->where('user_id',$userid);
            $this->db->update('new_product',$fromArray);  //  update users SET name=? ,email = ? where user_id = ?;
        }
        function update_product_group($userid,$fromArray)
        {
            $this->db->where('user_id',$userid);
            $this->db->update('new_product_group',$fromArray);  //  update users SET name=? ,email = ? where user_id = ?;
        }
        function update_product_model($userid,$fromArray)
        {
            $this->db->where('user_id',$userid);
            $this->db->update('new_product_model',$fromArray);  //  update users SET name=? ,email = ? where user_id = ?;
        }
        function update_product_serial($userid,$fromArray)
        {
            $this->db->where('user_id',$userid);
            $this->db->update('new_product_serial',$fromArray);  //  update users SET name=? ,email = ? where user_id = ?;
        }
        function delete_customer($userid)
        {
            $this->db->where('user_id',$userid);
            $this->db->delete('new_customer');
        }
        function delete_executive($userid)
        {
            $this->db->where('user_id',$userid);
            $this->db->delete('new_executive');
        }
        function delete_product($userid)
        {
            $this->db->where('user_id',$userid);
            $this->db->delete('new_product');
        }
        function delete_product_group($userid)
        {
            $this->db->where('user_id',$userid);
            $this->db->delete('new_product_group');
        }
        function delete_product_model($userid)
        {
            $this->db->where('user_id',$userid);
            $this->db->delete('new_product_model');
        }
        function delete_product_serial($userid)
        {
            $this->db->where('user_id',$userid);
            $this->db->delete('new_product_serial');
        }
        function get_customer($userid)
        {
            $this->db->where('user_id',$userid);
            return $user = $this->db->get('new_customer')->row_array();  // select * from users where user_id = ?;
        }
        function get_executive($userid)
        {
            $this->db->where('user_id',$userid);
            return $user = $this->db->get('new_executive')->row_array();  // select * from users where user_id = ?;
        }
        function get_product($userid)
        {
            $this->db->where('user_id',$userid);
            return $user = $this->db->get('new_product')->row_array();  // select * from users where user_id = ?;
        }
        function get_product_group($userid)
        {
            $this->db->where('user_id',$userid);
            return $user = $this->db->get('new_product_group')->row_array();  // select * from users where user_id = ?;
        }
        function get_product_model($userid)
        {
            $this->db->where('user_id',$userid);
            return $user = $this->db->get('new_product_model')->row_array();  // select * from users where user_id = ?;
        }
        function get_product_serial($userid)
        {
            $this->db->where('user_id',$userid);
            return $user = $this->db->get('new_product_serial')->row_array();  // select * from users where user_id = ?;
        }
    }
?>