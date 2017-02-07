<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('consult_model');
	}

	public function index(){

		$data['cust'] = $this->consult_model->custom();
		$data['mes'] = $this->consult_model->pormes();

		$this->load->view('charts', $data);

		//$this->load->view('charts');
	
	}

}