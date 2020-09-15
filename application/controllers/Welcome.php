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
	 * map to /index.php/welcome/<method_name>
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
	public function addnewcustomer()
	{
		
		
            $this->load->model('User_model');

           
            
                $this->load->view('addnewcustomer');
            
             
                //  save user to database.

                $formarray=array();
                $formarray['name']= $this->input->post('name');
				$formarray['email']= $this->input->post('email');
				$formarray['email']= $this->input->post('email');
				$formarray['email']= $this->input->post('email');
				$formarray['email']= $this->input->post('email');
				$formarray['email']= $this->input->post('email');
				$formarray['email']= $this->input->post('email');
				$formarray['email']= $this->input->post('email');
				$formarray['email']= $this->input->post('email');
				$formarray['email']= $this->input->post('email');
				$formarray['email']= $this->input->post('email');
				$formarray['email']= $this->input->post('email');
				$formarray['email']= $this->input->post('email');
				$formarray['email']= $this->input->post('email');
				
                
                $this->User_model->addnewcustomer($formarray);
                $this->session->set_flashdata('success','Record added successfully!');
                redirect(base_url().'index.php/welcome/index');
            
        
	}
	public function managecustomer()
	{
	$this->load->view('managecustomer');
	}
}
