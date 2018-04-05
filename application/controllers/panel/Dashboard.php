<?php
public class Dashboard extends MY_Controller{
	public __construct(){
		 parent::__construct();
	}
	function index(){
		$this->setTemplate("dashboard",array("title"=>$this->lang->line("dashboard")));
	}
}
?>