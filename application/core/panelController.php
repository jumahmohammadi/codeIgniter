<?php
class panelController extends MY_Controller{
	protected $url="";
	function __construct(){
		parent::__construct();
		$this->config->load("panel-config");
		$this->scope=$this->config->item('scope');
		$this->url=base_url().$this->scope;

		self::set_scope_constants();
	}

	protected set_scope_constants(){
		(defined("VIEW_PATH"))?"":define("VIEW_PATH",$this->config->item("VIEWPATH"));
		(defined("VIEW_ALIAS"))?"":define("TEMPLATE_ALIAS",$this->config->item("TEMPLATE_PATH").$this->config->item("TEMPLATE_NAME"));

		(defined("MeansJS"))?"":define("MeansJS",$this->config->item("TemplateMeansJS"));
		(defined("MeansCSS"))?"":define("MeansCSS",$this->config->item("TemplateMeansCSS"));
		(defined("MeansImages"))?"":define("MeansImages",$this->config->item("TemplateMeansImages"));
	}

	public function setTemplate($view,$parameters){
		  $this->template->content->view(VIEW_PATH.$view,$parameters);
		  $this->template->publish(TEMPLATE_ALIAS);
	}

	public function uploadImages(){
		
	}
}

?>