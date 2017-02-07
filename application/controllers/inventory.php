<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		$this->load->model('consult_model');
	}


	public function index(){

		$this->load->view('inventory');
	}
	
	public function inventory($store, $type){

		$data['inv'] = $this->consult_model->inventory($store,$type);

		$this->load->view('inventory_list', $data);
	}




}
