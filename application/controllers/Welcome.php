<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_mobile_no>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function dashboard()
	{
		$this->load->view('dashboard');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function addnewexecutive(){
		$this->load->model('User_model');
		$this->form_validation->set_rules('executive_code', 'Executive Code','required');
		$this->form_validation->set_rules('executive_name', 'Executive Name','required');
		$this->form_validation->set_rules('executive_type', 'Executive Type','required');
		$this->form_validation->set_rules('email', 'Email','required|valid_email');
		$this->form_validation->set_rules('address', 'Address','required');
		$this->form_validation->set_rules('mobile_no', 'Mobile Number','required');
		$this->form_validation->set_rules('password', 'Password','required');

		if ($this->form_validation->run()== false){
			$this->load->view('addnewexecutive');
		}
		else 
		{
			//  save user to database.

                $fromarray=array();
				$fromarray['executive_code']= $this->input->post('executive_code');
				$fromarray['executive_name']= $this->input->post('executive_name');
				$fromarray['executive_type']= $this->input->post('executive_type');
				$fromarray['email']= $this->input->post('email');
				$fromarray['address']= $this->input->post('address');
                $fromarray['mobile_no']= $this->input->post('mobile_no');
				$fromarray['password']= $this->input->post('password');

				$this->User_model->addnewexecutive($fromarray);
                $this->session->set_flashdata('success','Record added successfully!');
                redirect(base_url().'index.php/welcome/addnewexecutive');
		}
	}
	public function addproduct(){
		$this->load->model('User_model');
		$this->form_validation->set_rules('product_code', 'Product Code','required');
		$this->form_validation->set_rules('product_brand', 'Product Brand','required');
		$this->form_validation->set_rules('product_name', 'Product Name','required');
		$this->form_validation->set_rules('product_unit', 'Product Unit','required');
		$this->form_validation->set_rules('product_details', 'Product Details','required');
		$this->form_validation->set_rules('product_warranty', 'Product Warranty','required');
		$this->form_validation->set_rules('product_image', 'Product Image','required');

		if ($this->form_validation->run()== false){
			$this->load->view('addproduct');
		}
		else 
		{
			//  save user to database.

                $fromarray=array();
				$fromarray['product_code']= $this->input->post('product_code');
				$fromarray['product_brand']= $this->input->post('product_brand');
				$fromarray['product_name']= $this->input->post('product_name');
				$fromarray['product_unit']= $this->input->post('product_unit');
				$fromarray['product_details']= $this->input->post('product_details');
                $fromarray['product_warranty']= $this->input->post('product_warranty');
				$fromarray['product_image']= $this->input->post('product_image');

				$this->User_model->addproduct($fromarray);
                $this->session->set_flashdata('success','Record added successfully!');
                redirect(base_url().'index.php/welcome/addproduct');
		}
	}
	public function addproductgroup(){
		$this->load->model('User_model');
		$this->form_validation->set_rules('product_group_code', 'Product Group Code','required');
		$this->form_validation->set_rules('product_group_name', 'Product Group Name','required');
		
		if ($this->form_validation->run()== false){
			$this->load->view('addproductgroup');
		}
		else 
		{
			//  save user to database.

                $fromarray=array();
				$fromarray['product_group_code']= $this->input->post('product_group_code');
				$fromarray['product_group_name']= $this->input->post('product_group_name');
				
				$this->User_model->addproductgroup($fromarray);
                $this->session->set_flashdata('success','Record added successfully!');
                redirect(base_url().'index.php/welcome/addproductgroup');
		}
	}
	public function addproductmodel(){
		$this->load->model('User_model');
		$this->form_validation->set_rules('product_model_code', 'Product Model Code','required');
		$this->form_validation->set_rules('product_model_name', 'Product Model Name','required');
		$this->form_validation->set_rules('select_product', 'Select Product','required');
		
		if ($this->form_validation->run()== false){
			$this->load->view('addproductmodel');
		}
		else 
		{
			//  save user to database.

                $fromarray=array();
				$fromarray['product_model_code']= $this->input->post('product_model_code');
				$fromarray['product_model_name']= $this->input->post('product_model_name');
				$fromarray['select_product']= $this->input->post('select_product');
				
				$this->User_model->addproductmodel($fromarray);
                $this->session->set_flashdata('success','Record added successfully!');
                redirect(base_url().'index.php/welcome/addproductmodel');
		}
	}
	public function addproductserial(){
		$this->load->model('User_model');
		$this->form_validation->set_rules('product_serial_code', 'Product Serial Code','required');
		$this->form_validation->set_rules('product_model', 'Product Model','required');
		$this->form_validation->set_rules('product_name', 'Product ame','required');
		$this->form_validation->set_rules('product_price', 'Product Price','required');
		
		if ($this->form_validation->run()== false){
			$this->load->view('addproductserial');
		}
		else 
		{
			//  save user to database.

                $fromarray=array();
				$fromarray['product_serial_code']= $this->input->post('product_serial_code');
				$fromarray['product_model']= $this->input->post('product_model');
				$fromarray['product_name']= $this->input->post('product_name');
				$fromarray['product_price']= $this->input->post('product_price');
				
				$this->User_model->addproductserial($fromarray);
                $this->session->set_flashdata('success','Record added successfully!');
                redirect(base_url().'index.php/welcome/addproductserial');
		}
	}
    function addnewcustomer()
    {
		$this->load->model('User_model');

		$this->form_validation->set_rules('mobile_no', 'Mobile Number','required');
		$this->form_validation->set_rules('customer_code', 'Customer Code','required');
		$this->form_validation->set_rules('customer_name', 'Customer Name','required');
		$this->form_validation->set_rules('company_name', 'Company Name','required');
		$this->form_validation->set_rules('customer_type', 'Customer Type','required');
		$this->form_validation->set_rules('address', 'Address','required');
		$this->form_validation->set_rules('city', 'City','required');
		$this->form_validation->set_rules('state', 'State','required');
		$this->form_validation->set_rules('zip', 'Zip/Postal Code','required');
		$this->form_validation->set_rules('alt_phone', 'Alternate Phone No','required');
		$this->form_validation->set_rules('email', 'Email','required|valid_email');
		$this->form_validation->set_rules('password', 'Password','required');
		//$this->form_validation->set_rules('note', 'Note');
		$this->form_validation->set_rules('select_file', 'File');

		if ($this->form_validation->run()== false){
			$this->load->view('addnewcustomer');
		}
		else {  //  save user to database.
                $fromarray=array();
                $fromarray['mobile_no']= $this->input->post('mobile_no');
				$fromarray['customer_code']= $this->input->post('customer_code');
				$fromarray['customer_name']= $this->input->post('customer_name');
				$fromarray['company_name']= $this->input->post('company_name');
				$fromarray['customer_type']= $this->input->post('customer_type');
				$fromarray['address']= $this->input->post('address');
				$fromarray['city']= $this->input->post('city');
				$fromarray['state']= $this->input->post('state');
				$fromarray['zip']= $this->input->post('zip');
				$fromarray['alt_phone']= $this->input->post('alt_phone');
				$fromarray['email']= $this->input->post('email');
				$fromarray['password']= $this->input->post('password');
				$fromarray['note']= $this->input->post('note');
				$fromarray['select_file']= $this->input->post('select_file');                
                $this->User_model->addnewcustomer($fromarray);
                $this->session->set_flashdata('success','Record added successfully!');
                redirect(base_url().'index.php/welcome/addnewcustomer');
		}        
	}
	function edit_customer($userid)
    {
        //$this->load->view('edit_customer');

        $this->load->model('user_model');
        $user=$this->user_model->get_customer($userid);
        $data = array();
        $data['user'] = $user;

        $this->form_validation->set_rules('mobile_no', 'Mobile Number','required');
		$this->form_validation->set_rules('customer_code', 'Customer Code','required');
		$this->form_validation->set_rules('customer_name', 'Customer Name','required');
		$this->form_validation->set_rules('company_name', 'Company Name','required');
		$this->form_validation->set_rules('customer_type', 'Customer Type','required');
		$this->form_validation->set_rules('address', 'Address','required');
		$this->form_validation->set_rules('city', 'City','required');
		$this->form_validation->set_rules('state', 'State','required');
		$this->form_validation->set_rules('zip', 'Zip/Postal Code','required');
		$this->form_validation->set_rules('alt_phone', 'Alternate Phone No','required');
		$this->form_validation->set_rules('email', 'Email','required|valid_email');
		$this->form_validation->set_rules('password', 'Password','required');
		//$this->form_validation->set_rules('note', 'Note');
		$this->form_validation->set_rules('select_file', 'File');

            if($this->form_validation->run() == false)
            {
                $this->load->view('Edit_customer',$data);
            }
            else
            {
                $fromArray = array();
                $fromarray['mobile_no']= $this->input->post('mobile_no');
				$fromarray['customer_code']= $this->input->post('customer_code');
				$fromarray['customer_name']= $this->input->post('customer_name');
				$fromarray['company_name']= $this->input->post('company_name');
				$fromarray['customer_type']= $this->input->post('customer_type');
				$fromarray['address']= $this->input->post('address');
				$fromarray['city']= $this->input->post('city');
				$fromarray['state']= $this->input->post('state');
				$fromarray['zip']= $this->input->post('zip');
				$fromarray['alt_phone']= $this->input->post('alt_phone');
				$fromarray['email']= $this->input->post('email');
				$fromarray['password']= $this->input->post('password');
				$fromarray['note']= $this->input->post('note');
				$fromarray['select_file']= $this->input->post('select_file');                
                $this->user_model->update_customer($userid,$fromArray);
                $this->session->set_flashdata('success','Record updated successfully');
                redirect(base_url().'index.php/welcome/maagecustomer');
            }
    }
    function delete_customer($userid)
    {
        $this->load->model('user_model');
        $user=$this->user_model->get_customer($userid);
        if(empty($user))        
        {
            $this->session->set_flashdata('failure','record not found in database');
            redirect(base_url().'index.php/welcome/managecustomer');
        }
        else{
        $this->user_model->delete_customer($userid);
        $this->session->set_flashdata('success','record deleted successfully');
        redirect(base_url().'index.php/welcome/managecustomer');
        }
	}
	function edit_executive($userid)
    {
        $this->load->model('user_model');
        $user=$this->user_model->get_executive($userid);
        $data = array();
        $data['user'] = $user;

        $this->form_validation->set_rules('executive_code', 'Executive Code','required');
		$this->form_validation->set_rules('executive_name', 'Executive Name','required');
		$this->form_validation->set_rules('executive_type', 'Executive Type','required');
		$this->form_validation->set_rules('email', 'Email','required|valid_email');
		$this->form_validation->set_rules('address', 'Address','required');
		$this->form_validation->set_rules('mobile_no', 'Mobile Number','required');
		$this->form_validation->set_rules('password', 'Password','required');

            if($this->form_validation->run() == false)
            {
                $this->load->view('edit_executive',$data);
            }
            else
            {
                $fromArray = array();
                $fromarray['executive_code']= $this->input->post('executive_code');
				$fromarray['executive_name']= $this->input->post('executive_name');
				$fromarray['executive_type']= $this->input->post('executive_type');
				$fromarray['email']= $this->input->post('email');
				$fromarray['address']= $this->input->post('address');
                $fromarray['mobile_no']= $this->input->post('mobile_no');
				$fromarray['password']= $this->input->post('password');
                $this->user_model->update_executive($userid,$fromArray);
                $this->session->set_flashdata('success','Record updated successfully');
                redirect(base_url().'index.php/welcome/manageexecutive');
            }
    }
    function delete_executive($userid)
    {
        $this->load->model('user_model');
        $user=$this->user_model->get_executive($userid);
        if(empty($user))        
        {
            $this->session->set_flashdata('failure','record not found in database');
            redirect(base_url().'index.php/welcome/manage_product');
        }
        else
        {
        $this->user_model->delete_executive($userid);
        $this->session->set_flashdata('success','record deleted successfully');
        redirect(base_url().'index.php/welcome/manageexecutive');
        }
	}
	function edit_product($userid)
    {
        $this->load->model('user_model');
        $user=$this->user_model->get_product($userid);
        $data = array();
        $data['user'] = $user;

        $this->form_validation->set_rules('product_code', 'Product Code','required');
		$this->form_validation->set_rules('product_brand', 'Product Brand','required');
		$this->form_validation->set_rules('product_name', 'Product Name','required');
		$this->form_validation->set_rules('product_unit', 'Product Unit','required');
		$this->form_validation->set_rules('product_details', 'Product Details','required');
		$this->form_validation->set_rules('product_warranty', 'Product Warranty','required');
		$this->form_validation->set_rules('product_image', 'Product Image','required');

            if($this->form_validation->run() == false)
            {
                $this->load->view('edit_product',$data);
            }
            else
            {
                $fromArray = array();
                $fromarray['product_code']= $this->input->post('product_code');
				$fromarray['product_brand']= $this->input->post('product_brand');
				$fromarray['product_name']= $this->input->post('product_name');
				$fromarray['product_unit']= $this->input->post('product_unit');
				$fromarray['product_details']= $this->input->post('product_details');
                $fromarray['product_warranty']= $this->input->post('product_warranty');
				$fromarray['product_image']= $this->input->post('product_image');
                $this->user_model->update_product($userid,$fromArray);
                $this->session->set_flashdata('success','Record updated successfully');
                redirect(base_url().'index.php/welcome/manage_product');
            }
    }
    function delete_product($userid)
    {
        $this->load->model('user_model');
        $user=$this->user_model->get_product($userid);
        if(empty($user))        
        {
            $this->session->set_flashdata('failure','record not found in database');
            redirect(base_url().'index.php/welcome/manage_product');
        }
        else{
        $this->user_model->delete_product($userid);
        $this->session->set_flashdata('success','record deleted successfully');
        redirect(base_url().'index.php/welcome/manage_product');
        }
	}
	function edit_product_group($userid)
    {
        $this->load->model('user_model');
        $user=$this->user_model->get_product_group($userid);
        $data = array();
        $data['user'] = $user;

        $this->form_validation->set_rules('product_group_code', 'Product Group Code','required');
		$this->form_validation->set_rules('product_group_name', 'Product Group Name','required');
		
            if($this->form_validation->run() == false)
            {
                $this->load->view('edit_product_group',$data);
            }
            else
            {
                $fromArray = array();
                $fromarray['product_group_code']= $this->input->post('product_group_code');
				$fromarray['product_group_name']= $this->input->post('product_group_name');
				$this->user_model->update_product_group($userid,$fromArray);
                $this->session->set_flashdata('success','Record updated successfully');
                redirect(base_url().'index.php/welcome/manage_product_group');
            }
    }
    function delete_product_group($userid)
    {
        $this->load->model('user_model');
        $user=$this->user_model->get_product_group($userid);
        if(empty($user))        
        {
            $this->session->set_flashdata('failure','record not found in database');
            redirect(base_url().'index.php/welcome/manage_product_group');
        }
        else{
        $this->user_model->delete_product_group($userid);
        $this->session->set_flashdata('success','record deleted successfully');
        redirect(base_url().'index.php/welcome/manage_product_group');
        }
	}
	function edit_product_model($userid)
    {
        $this->load->model('user_model');
        $user=$this->user_model->get_product_model($userid);
        $data = array();
        $data['user'] = $user;

        $this->form_validation->set_rules('product_model_code', 'Product Model Code','required');
		$this->form_validation->set_rules('product_model_name', 'Product Model Name','required');
		$this->form_validation->set_rules('select_product', 'Select Product','required');
		
            if($this->form_validation->run() == false)
            {
                $this->load->view('edit_product_model',$data);
            }
            else
            {
                $fromArray = array();
                $fromarray['product_model_code']= $this->input->post('product_model_code');
				$fromarray['product_model_name']= $this->input->post('product_model_name');
				$fromarray['select_product']= $this->input->post('select_product');
				$this->user_model->update_product_model($userid,$fromArray);
                $this->session->set_flashdata('success','Record updated successfully');
                redirect(base_url().'index.php/welcome/manage_product_model');
            }
    }
    function delete_product_model($userid)
    {
        $this->load->model('user_model');
        $user=$this->user_model->get_product_model($userid);
        if(empty($user))        
        {
            $this->session->set_flashdata('failure','record not found in database');
            redirect(base_url().'index.php/welcome/manage_product_model');
        }
        else{
        $this->user_model->delete_product_model($userid);
        $this->session->set_flashdata('success','record deleted successfully');
        redirect(base_url().'index.php/welcome/manage_product_model');
        }
	}
	function edit_product_serial($userid)
    {
        $this->load->model('user_model');
        $user=$this->user_model->get_product_serial($userid);
        $data = array();
        $data['user'] = $user;

        $this->form_validation->set_rules('product_serial_code', 'Product Serial Code','required');
		$this->form_validation->set_rules('product_model', 'Product Model','required');
		$this->form_validation->set_rules('product_name', 'Product ame','required');
		$this->form_validation->set_rules('product_price', 'Product Price','required');
		
            if($this->form_validation->run() == false)
            {
                $this->load->view('edit_product_serial',$data);
            }
            else
            {
                $fromArray = array();
                $fromarray['product_serial_code']= $this->input->post('product_serial_code');
				$fromarray['product_model']= $this->input->post('product_model');
				$fromarray['product_name']= $this->input->post('product_name');
				$fromarray['product_price']= $this->input->post('product_price');
				$this->user_model->update_product_serial($userid,$fromArray);
                $this->session->set_flashdata('success','Record updated successfully');
                redirect(base_url().'index.php/welcome/manage_product_serial');
            }
    }
    function delete_product_serial($userid)
    {
        $this->load->model('user_model');
        $user=$this->user_model->get_product_serial($userid);
        if(empty($user))        
        {
            $this->session->set_flashdata('failure','record not found in database');
            redirect(base_url().'index.php/welcome/manage_product_serial');
        }
        else{
        $this->user_model->delete_product_serial($userid);
        $this->session->set_flashdata('success','record deleted successfully');
        redirect(base_url().'index.php/welcome/manage_product_serial');
        }
    }
    public function managecustomer()
	{
		$this->load->model('User_model');
		$new_customer = $this->User_model->managecustomer();
		$data = array();
		$data['new_customer']= $new_customer;
		$this->load->view('managecustomer',$data);
	}
	public function manageexecutive()
	{
		$this->load->model('User_model');
		$new_executive = $this->User_model->manageexecutive();
		$data = array();
		$data['new_executive']= $new_executive;
		$this->load->view('manageexecutive',$data);
	}
	public function manage_product()
	{
		$this->load->model('User_model');
		$new_product = $this->User_model->manage_product();
		$data = array();
		$data['new_product']= $new_product;
		$this->load->view('manage_product',$data);
	}
	public function manage_product_group()
	{
		$this->load->model('User_model');
		$new_product_group = $this->User_model->manage_product_group();
		$data = array();
		$data['new_product_group']= $new_product_group;
		$this->load->view('manage_product_group',$data);
	}
	public function manage_product_model()
	{
		$this->load->model('User_model');
		$new_product_model = $this->User_model->manage_product_model();
		$data = array();
		$data['new_product_model']= $new_product_model;
		$this->load->view('manage_product_model',$data);
	}
	public function manage_product_serial()
	{
		$this->load->model('User_model');
		$new_product_serial = $this->User_model->manage_product_serial();
		$data = array();
		$data['new_product_serial']= $new_product_serial;
		$this->load->view('manage_product_serial',$data);
	}
}
