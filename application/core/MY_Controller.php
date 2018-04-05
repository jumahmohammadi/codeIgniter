<?php
class MY_Controller extends CI_Controller{
	public $table; 
	public $scope; 
	public $url;
	function __construct(){
		parent::__construct();
		self::setTables();
	   $this->lang->load("public","fa");

	}

	protected function setTables(){
		$this->table=array(
           "customers"=>"customers",
           "brands"=>"manufacturers",
           "orders"=>"orders",
           "products"=>"products",
           "product_groups"=>"product_groups",
           "product_pictures"=>"product_pictures"
		);
	}

	protected function upload_files(){

	}
	protected function success(){

	}
}
?>