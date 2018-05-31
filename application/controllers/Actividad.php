<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actividad extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function add($value='')
	{

		// llamo a mi vista
		$html = $this->load->view('actividad/add', array(), TRUE);
		// Llamo a la plantilla
		$this->load->view("inicio/principal", array("html"=> $html));
		
	}

	public function lista($value='')
	{
		// llamo a mi vista
		$html = $this->load->view('actividad/lista', array(), TRUE);
		// Llamo a la plantilla
		$this->load->view("inicio/principal", array("html"=> $html));
	}


}

/* End of file Actividad.php */
/* Location: ./application/controllers/Actividad.php */