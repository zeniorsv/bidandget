<?php

class Consult_model extends CI_Model{
	
	public function __construct(){		
		parent::__construct();
		$this->load->database();
		
	}

	public function category(){
		
		//$this->db->where('pages.deleted = 0') ;
		$data = $this->db->get('category');
  		//$data = $this->db->order_by('priority', 'asc')->get('pages');
		return $data->result();
  
	}

	public function subcat($id){
		
		$this->db->limit(1);
		$data = $this->db->get_where('subcat', array('id_cat' => $id));
		return $data->row();
		
	}

	public function find_stock(){
		
		$stock=$_POST['stock'];
		//print_r($stock);

		$data = $this->db->select('dbo.Item.ItemLookupCode');
		$data = $this->db->select('dbo.Item.Description');
		$data = $this->db->select('dbo.ItemDynamic.Quantity');
		$data = $this->db->select('dbo.ItemDynamic.StoreID');
		$data = $this->db->select('dbo.Item.Price');
		$data = $this->db->select('dbo.Item.Cost');
		$data = $this->db->from('dbo.ItemDynamic');
		$data = $this->db->join('dbo.Item','dbo.Item.ID=dbo.ItemDynamic.ItemID','INNER');		
		$data = $this->db->like('dbo.Item.ItemLookupCode', $stock); 
		//gettingvalue from session and match the id of table5 and then show data
		$data=$this->db->get()->result();//all data store in $data variabl
		return $data;
	}

	public function month_sales(){
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$data = $this->db->select('dbo.Order.ID');
		$data = $this->db->select('dbo.Order.StoreID');		
		$data = $this->db->select('dbo.Order.LastUpdated');
		$data = $this->db->select('dbo.Order.Total');
		$data = $this->db->select('dbo.Order.ShippingNotes');
		$data = $this->db->select('dbo.Customer.Company');
		$data = $this->db->select('dbo.Store.Name');
		$data = $this->db->from('Order, Customer, Store');
		$data = $this->db->where('Order.CustomerID=Customer.ID');
		$data = $this->db->where('Order.StoreID=Customer.StoreID');
		$data = $this->db->where('Order.StoreID=Store.ID');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		$data = $this->db->order_by('Time','DESC');	
		$data = $this->db->get()->result();
		return $data;
	}

	public function last_invoice(){
		//ULTIMOS 10 REGISTROS
		$this->db->limit(10);
		$data = $this->db->select('dbo.Order.ID');
		$data = $this->db->select('dbo.Order.StoreID');
		$data = $this->db->select('dbo.Order.Time');
		$data = $this->db->select('dbo.Order.Total');
		$data = $this->db->select('dbo.Store.Name');
		$data = $this->db->from('Order, Store');
		$data = $this->db->where('dbo.Order.StoreID=dbo.Store.ID');
		$data = $this->db->order_by('dbo.Order.Time','DESC');
		$data = $this->db->get()->result();
		return $data;
	}

	public function view_invoice($id){
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual
		
		//$this->db->limit(1);
		$data = $this->db->where('YEAR(LastUpdated)', $year);
		$data = $this->db->where('MONTH(LastUpdated)', $month);
		$data = $this->db->get_where('dbo.OrderEntry', array('dbo.OrderEntry.OrderID' => $id));
		
		return $data->result();
		
	}

	public function details_invoice($id){
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual
		
		$data = $this->db->select('dbo.Order.ID');
		$data = $this->db->select('dbo.Order.StoreID');		
		$data = $this->db->select('dbo.Order.LastUpdated');
		$data = $this->db->select('dbo.Order.Total');
		$data = $this->db->select('dbo.Order.Tax');
		$data = $this->db->select('dbo.Order.ShippingNotes');
		$data = $this->db->select('dbo.Customer.Company');
		$data = $this->db->select('dbo.Customer.Address');
		$data = $this->db->select('dbo.Customer.Company');
		$data = $this->db->select('dbo.Customer.City');
		$data = $this->db->select('dbo.Customer.PhoneNumber');
		$data = $this->db->select('dbo.Customer.State');
		$data = $this->db->select('dbo.Customer.EmailAddress');
		$data = $this->db->select('dbo.Store.Name');
		$data = $this->db->select('dbo.Store.Address1');
		$data = $this->db->select('dbo.Store.Address2');
		$data = $this->db->select('dbo.Store.Country');
		$data = $this->db->from('Order, Customer, Store');
		$data = $this->db->where('Order.CustomerID=Customer.ID');
		$data = $this->db->where('Order.StoreID=Customer.StoreID');
		$data = $this->db->where('Order.StoreID=Store.ID');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		$data = $this->db->where('dbo.Order.ID',$id);
		$data = $this->db->order_by('Time','DESC');
		$data = $this->db->get()->result();
		return $data;
		
		//return $data->result();
		
	}

	public function daysales(){
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$this->db->select_sum('dbo.Order.Total');
		$this->db->from('Order');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		$data = $this->db->where('DAY(Time)', $thisday);

		$data = $this->db->get()->result();
		return $data;

	}

	public function monthsales(){
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$this->db->select_sum('dbo.Order.Total');
		$this->db->from('Order');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		

		$data = $this->db->get()->result();
		return $data;

	}

	public function daysales_h(){
		
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$this->db->select_sum('dbo.Order.Total');
		$this->db->from('Order');
		$data = $this->db->where('StoreID', '1');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		$data = $this->db->where('DAY(Time)', $thisday);

		$data = $this->db->get()->result();
		return $data;

	}

	public function monthsales_h(){
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$this->db->select_sum('dbo.Order.Total');
		$this->db->from('Order');
		$data = $this->db->where('StoreID', '1');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		

		$data = $this->db->get()->result();
		return $data;

	}

	public function month_sales_h(){
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$data = $this->db->select('dbo.Order.ID');
		$data = $this->db->select('dbo.Order.StoreID');		
		$data = $this->db->select('dbo.Order.LastUpdated');
		$data = $this->db->select('dbo.Order.Total');
		$data = $this->db->select('dbo.Order.ShippingNotes');
		$data = $this->db->select('dbo.Customer.Company');
		$data = $this->db->select('dbo.Store.Name');
		$data = $this->db->from('Order, Customer, Store');
		$data = $this->db->where('Order.CustomerID=Customer.ID');
		$data = $this->db->where('Order.StoreID=Customer.StoreID');
		$data = $this->db->where('Order.StoreID=Store.ID');
		$data = $this->db->where('Order.StoreID', '1');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		$data = $this->db->order_by('Time','DESC');	
		$data = $this->db->get()->result();
		return $data;		

	}

	public function daysales_inver(){
		
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$this->db->select_sum('dbo.Order.Total');
		$this->db->from('Order');
		$data = $this->db->where('StoreID', '6');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		$data = $this->db->where('DAY(Time)', $thisday);

		$data = $this->db->get()->result();
		return $data;

	}

	public function monthsales_inver(){
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$this->db->select_sum('dbo.Order.Total');
		$this->db->from('Order');
		$data = $this->db->where('StoreID', '6');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		

		$data = $this->db->get()->result();
		return $data;

	}

	public function month_sales_inver(){
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$data = $this->db->select('dbo.Order.ID');
		$data = $this->db->select('dbo.Order.StoreID');		
		$data = $this->db->select('dbo.Order.LastUpdated');
		$data = $this->db->select('dbo.Order.Total');
		$data = $this->db->select('dbo.Order.ShippingNotes');
		$data = $this->db->select('dbo.Customer.Company');
		$data = $this->db->select('dbo.Store.Name');
		$data = $this->db->from('Order, Customer, Store');
		$data = $this->db->where('Order.CustomerID=Customer.ID');
		$data = $this->db->where('Order.StoreID=Customer.StoreID');
		$data = $this->db->where('Order.StoreID=Store.ID');
		$data = $this->db->where('Order.StoreID', '6');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		$data = $this->db->order_by('Time','DESC');	
		$data = $this->db->get()->result();
		return $data;		

	}

	public function daysales_gyt(){
		
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$this->db->select_sum('dbo.Order.Total');
		$this->db->from('Order');
		$data = $this->db->where('StoreID', '13');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		$data = $this->db->where('DAY(Time)', $thisday);

		$data = $this->db->get()->result();
		return $data;

	}

	public function monthsales_gyt(){
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$this->db->select_sum('dbo.Order.Total');
		$this->db->from('Order');
		$data = $this->db->where('StoreID', '13');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		

		$data = $this->db->get()->result();
		return $data;

	}

	public function month_sales_gyt(){
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$data = $this->db->select('dbo.Order.ID');
		$data = $this->db->select('dbo.Order.StoreID');		
		$data = $this->db->select('dbo.Order.LastUpdated');
		$data = $this->db->select('dbo.Order.Total');
		$data = $this->db->select('dbo.Order.ShippingNotes');
		$data = $this->db->select('dbo.Customer.Company');
		$data = $this->db->select('dbo.Store.Name');
		$data = $this->db->from('Order, Customer, Store');
		$data = $this->db->where('Order.CustomerID=Customer.ID');
		$data = $this->db->where('Order.StoreID=Customer.StoreID');
		$data = $this->db->where('Order.StoreID=Store.ID');
		$data = $this->db->where('Order.StoreID', '13');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		$data = $this->db->order_by('Time','DESC');	
		$data = $this->db->get()->result();
		return $data;		

	}

	public function daysales_sv(){
		
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$this->db->select_sum('dbo.Order.Total');
		$this->db->from('Order');
		$data = $this->db->where('StoreID', '10');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		$data = $this->db->where('DAY(Time)', $thisday);

		$data = $this->db->get()->result();
		return $data;

	}

	public function monthsales_sv(){
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$this->db->select_sum('dbo.Order.Total');
		$this->db->from('Order');
		$data = $this->db->where('StoreID', '10');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		

		$data = $this->db->get()->result();
		return $data;

	}

	public function month_sales_sv(){
		$actualdate = date("d-m-Y"); // fecha actual
		$year = date("Y"); // Año actual
		$month = date("m"); // Mes actual
		$thisday = date("d"); // Dia actual

		$data = $this->db->select('dbo.Order.ID');
		$data = $this->db->select('dbo.Order.StoreID');		
		$data = $this->db->select('dbo.Order.LastUpdated');
		$data = $this->db->select('dbo.Order.Total');
		$data = $this->db->select('dbo.Order.ShippingNotes');
		$data = $this->db->select('dbo.Customer.Company');
		$data = $this->db->select('dbo.Store.Name');
		$data = $this->db->from('Order, Customer, Store');
		$data = $this->db->where('Order.CustomerID=Customer.ID');
		$data = $this->db->where('Order.StoreID=Customer.StoreID');
		$data = $this->db->where('Order.StoreID=Store.ID');
		$data = $this->db->where('Order.StoreID', '10');
		$data = $this->db->where('YEAR(Time)', $year);
		$data = $this->db->where('MONTH(Time)', $month);
		$data = $this->db->order_by('Time','DESC');	
		$data = $this->db->get()->result();
		return $data;		

	}

	public function month_custom($store, $year, $month){

		if (($store)==0) {
			$this->db->select_sum('dbo.Order.Total');
			$this->db->from('Order');
			$data = $this->db->where('YEAR(LastUpdated)', $year);
			$data = $this->db->where('MONTH(LastUpdated)', $month);

			$data = $this->db->get()->result();
			return $data;
		}else{
			$this->db->select_sum('dbo.Order.Total');
			$this->db->from('Order');
			$data = $this->db->where('StoreID', $store);
			$data = $this->db->where('YEAR(LastUpdated)', $year);
			$data = $this->db->where('MONTH(LastUpdated)', $month);

			$data = $this->db->get()->result();
			return $data;
		}

		
	}

	public function custom(){

		$data = $this->db->select('DAY("dbo"."Order"."LastUpdated") as dia');
		$data = $this->db->select('dbo.Order.StoreID');
		$data = $this->db->select_sum('dbo.Order.Total');
		$data = $this->db->from('Order');
		$data = $this->db->where('(dbo.Order.LastUpdated > (SELECT DATEADD(d,-1,GETDATE()) ) - 8)');
		$data = $this->db->group_by('DAY("dbo"."Order"."LastUpdated")');
		$data = $this->db->group_by('dbo.Order.StoreID');
		$data = $this->db->get()->result_array();
		return $data;
	}

	public function pormes(){

		$data = $this->db->select('MONTH("dbo"."Order"."LastUpdated")as mes');
		$data = $this->db->select('dbo.Order.StoreID');
		$data = $this->db->select_sum('dbo.Order.Total');
		$data = $this->db->from('Order');
		$data = $this->db->where('"dbo"."Order"."LastUpdated" >  DATEADD(ms,-3,DATEADD(mm,0,DATEADD(mm,DATEDIFF(mm,0,GETDATE()),0))) - 182');
		$data = $this->db->group_by('MONTH("dbo"."Order"."LastUpdated")');
		$data = $this->db->group_by('dbo.Order.StoreID');
		$data = $this->db->order_by('dbo.Order.mes');
		$data = $this->db->get()->result_array();
		return $data;
	}

	public function inventory($store, $type){

		$data = $this->db->select('ItemDynamic.Quantity');
		$data = $this->db->select('ItemDynamic.StoreID');
		$data = $this->db->select('Item.Description');
		$data = $this->db->select('Item.ItemLookupCode');
		$data = $this->db->select('Item.Price');
		$data = $this->db->select('Item.Cost');
		$data = $this->db->from('ItemDynamic');
		$data = $this->db->join('dbo.Item','dbo.Item.ID=dbo.ItemDynamic.ItemID','INNER');
		$data = $this->db->where('ItemDynamic.StoreID', $store);
		$data = $this->db->where('Item.ItemType', $type);
		$data = $this->db->where('ItemDynamic.Quantity > 0');
		$data = $this->db->get()->result();
		return $data;

	}
	// public function test()	{
	// 	$actualdate = date("d-m-Y"); // fecha actual
	// 	$year = date("Y"); // Año actual
	// 	$month = date("m"); // Mes actual
	// 	$thisday = date("d"); // Dia actual

			
	// 	//$mes = array(1 => 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo','Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
	// 	$mes = array( 1 => '1', '2', '3');
	// 	//$mes = array(  "Enero" => "1",		    "Febrero" => "2",		    "3" => "3",		    "4" => "4"		);
 
	// 	echo "<pre>";
	// 	print_r($mes);
	// 	echo "</pre>";


	// 	foreach ($mes as $row) {
	// 		echo $row;
	// 		$data = $this->db->limit(10);
 //    		$data = $this->db->select('dbo.Order.Total');
 //    		//$data = $this->db->select('dbo.Order.LastUpdated');
 //    		$data = $this->db->select('dbo.Order.StoreID');
	// 		$data = $this->db->from('Order');
	// 		$data = $this->db->where('MONTH(LastUpdated)',$row);
	// 		$data = $this->db->order_by('Time','DESC');	
	// 		$data = $this->db->get()->result();
	// 		//return $data;		
	// 		echo "<pre>";
	// 		print_r($data);
	// 		echo "</pre>";
	// 	}
 
		
	// }


}
