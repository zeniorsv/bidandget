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

	public function __construct(){
		parent::__construct();
		$this->load->model('consult_model');
	}


	public function index(){

		$data['category'] = $this->consult_model->category();
		//$data['last_invoice'] = $this->consult_model->last_invoice();

		$this->load->view('dashboard', $data);
	}

	public function category($id){

		$data['subcat'] = $this->consult_model->subcat($id);

    	$this->load->view('dashboard', $data);
	}

	// public function find_stock(){

	// 	$data['stock'] = $this->consult_model->find_stock();
		
 //    	$this->load->view('stock', $data);
 //   }

 //   	public function users(){

	// 	$data['user'] = $this->consult_model->find();
		
 //    	$this->load->view('stock', $data);
 //   }

 //   public function inventory($store, $type){

	// 	$data['inv'] = $this->consult_model->inventory($store,$type);

	// 	$this->load->view('inventory_list', $data);
	//}

}
