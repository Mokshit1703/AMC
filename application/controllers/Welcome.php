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
		$this->form_validation->set_rules('note', 'Note');
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
}
