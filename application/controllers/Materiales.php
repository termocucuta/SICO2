<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materiales extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	
	public function itemmaterial()
	{
		// llamo a mi vista
		$html = $this->load->view('materiales/itemmaterial', array(), TRUE);
		// Llamo a la plantilla
		$this->load->view("inicio/principal", array("html"=> $html));
	}


}
