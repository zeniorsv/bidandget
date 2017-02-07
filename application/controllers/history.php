<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		$this->load->model('consult_model');
	}


	public function index(){


		$this->load->view('history');
	}

	public function month_custom(){

		$store = $this->input->post('store');
		$year = $this->input->post('year');
		$month = $this->input->post('month');

		$data['consult'] = $this->consult_model->month_custom($store, $year, $month);

		$this->load->view('history', $data);

	}

	public function test(){

		$data['tester'] = $this->consult_model->test();
	}
	
	public function custom(){

		$data['cust'] = $this->consult_model->custom();

		echo "<pre>";
		print_r($data);
		echo "</pre>";

		//$this->load->view('final', $data);
	}

}