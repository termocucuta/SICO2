<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	
	public function proyecto()
	{
		// llamo a mi vista
		$html = $this->load->view('proyectos/proyecto', array(), TRUE);
		// Llamo a la plantilla
		$this->load->view("inicio/principal", array("html"=> $html));
	}


}
