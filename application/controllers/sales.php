<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

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

	public function __construct(){
		parent::__construct();
		$this->load->model('consult_model');
	}


	public function index(){

		$data['month_sales'] = $this->consult_model->month_sales();
		$data['daysales'] = $this->consult_model->daysales();
		$data['monthsales'] = $this->consult_model->monthsales();

		$this->load->view('sales', $data);
	}

	public function view_invoice($id){

		$data['invoice'] = $this->consult_model->view_invoice(intval($id));
		$data['details'] = $this->consult_model->details_invoice(intval($id));

		$this->load->view('view_invoice', $data);
		
	}

	public function honduras(){

		$data['monthsales_h'] = $this->consult_model->monthsales_h();
		$data['daysales_h'] = $this->consult_model->daysales_h();
		$data['month_sales_h'] = $this->consult_model->month_sales_h();

		$this->load->view('honduras', $data);
	}

	public function nicaragua(){

		$data['monthsales_inver'] = $this->consult_model->monthsales_inver();
		$data['daysales_inver'] = $this->consult_model->daysales_inver();
		$data['month_sales_inver'] = $this->consult_model->month_sales_inver();
		
		$data['monthsales_gyt'] = $this->consult_model->monthsales_gyt();
		$data['daysales_gyt'] = $this->consult_model->daysales_gyt();
		$data['month_sales_gyt'] = $this->consult_model->month_sales_gyt();

		$this->load->view('nicaragua', $data);
	}

	public function elsalvador(){

		$data['monthsales_sv'] = $this->consult_model->monthsales_sv();
		$data['daysales_sv'] = $this->consult_model->daysales_sv();
		$data['month_sales_sv'] = $this->consult_model->month_sales_sv();

		$this->load->view('elsalvador', $data);
	}	

	public function dia(){

		$data['monthsales_sv'] = $this->consult_model->monthsales_sv();	

		//$this->load->view('elsalvador', $data);
	}	
}
