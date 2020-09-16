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

                $formarray=array();
				$formarray['executive_code']= $this->input->post('executive_code');
				$formarray['executive_name']= $this->input->post('executive_name');
				$formarray['executive_type']= $this->input->post('executive_type');
				$formarray['email']= $this->input->post('email');
				$formarray['address']= $this->input->post('address');
                $formarray['mobile_no']= $this->input->post('mobile_no');
				$formarray['password']= $this->input->post('password');

				$this->User_model->addnewexecutive($formarray);
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

                $formarray=array();
				$formarray['product_code']= $this->input->post('product_code');
				$formarray['product_brand']= $this->input->post('product_brand');
				$formarray['product_name']= $this->input->post('product_name');
				$formarray['product_unit']= $this->input->post('product_unit');
				$formarray['product_details']= $this->input->post('product_details');
                $formarray['product_warranty']= $this->input->post('product_warranty');
				$formarray['product_image']= $this->input->post('product_image');

				$this->User_model->addproduct($formarray);
                $this->session->set_flashdata('success','Record added successfully!');
                redirect(base_url().'index.php/welcome/addproduct');
		}
	}
	public function addproductgroup(){
		$this->load->model('User_model');
		$this->form_validation->set_rules('executive_code', 'Executive Code','required');
		$this->form_validation->set_rules('executive_name', 'Executive Name','required');
		$this->form_validation->set_rules('executive_type', 'Executive Type','required');
		$this->form_validation->set_rules('email', 'Email','required|valid_email');
		$this->form_validation->set_rules('address', 'Address','required');
		$this->form_validation->set_rules('mobile_no', 'Mobile Number','required');
		$this->form_validation->set_rules('password', 'Password','required');

		if ($this->form_validation->run()== false){
			$this->load->view('addproductgroup');
		}
		else 
		{
			//  save user to database.

                $formarray=array();
				$formarray['executive_code']= $this->input->post('executive_code');
				$formarray['executive_name']= $this->input->post('executive_name');
				$formarray['executive_type']= $this->input->post('executive_type');
				$formarray['email']= $this->input->post('email');
				$formarray['address']= $this->input->post('address');
                $formarray['mobile_no']= $this->input->post('mobile_no');
				$formarray['password']= $this->input->post('password');

				$this->User_model->addproductgroup($formarray);
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

                $formarray=array();
				$formarray['product_model_code']= $this->input->post('product_model_code');
				$formarray['product_model_name']= $this->input->post('product_model_name');
				$formarray['select_product']= $this->input->post('select_product');
				
				$this->User_model->addproductmodel($formarray);
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

                $formarray=array();
				$formarray['product_serial_code']= $this->input->post('product_serial_code');
				$formarray['product_model']= $this->input->post('product_model');
				$formarray['product_name']= $this->input->post('product_name');
				$formarray['product_price']= $this->input->post('product_price');
				
				$this->User_model->addproductserial($formarray);
                $this->session->set_flashdata('success','Record added successfully!');
                redirect(base_url().'index.php/welcome/addproductserial');
		}
	}
	function addnewcustomer(){
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
		else {
			//  save user to database.

                $formarray=array();
                $formarray['mobile_no']= $this->input->post('mobile_no');
				$formarray['customer_code']= $this->input->post('customer_code');
				$formarray['customer_name']= $this->input->post('customer_name');
				$formarray['company_name']= $this->input->post('company_name');
				$formarray['customer_type']= $this->input->post('customer_type');
				$formarray['address']= $this->input->post('address');
				$formarray['city']= $this->input->post('city');
				$formarray['state']= $this->input->post('state');
				$formarray['zip']= $this->input->post('zip');
				$formarray['alt_phone']= $this->input->post('alt_phone');
				$formarray['email']= $this->input->post('email');
				$formarray['password']= $this->input->post('password');
				$formarray['note']= $this->input->post('note');
				$formarray['select_file']= $this->input->post('select_file');
				
                
                $this->User_model->addnewcustomer($formarray);
                $this->session->set_flashdata('success','Record added successfully!');
                redirect(base_url().'index.php/welcome/addnewcustomer');
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
