<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function equipos()
	{
		// llamo a mi vista
		$html = $this->load->view('equipo/equipos', array(), TRUE);
		// Llamo a la plantilla
		$this->load->view("inicio/principal", array("html"=> $html));
	}

	public function itemequipos()
	{
		// llamo a mi vista
		$html = $this->load->view('equipo/itemequipos', array(), TRUE);
		// Llamo a la plantilla
		$this->load->view("inicio/principal", array("html"=> $html));
	}

}

/* End of file Equipo.php */
/* Location: ./application/controllers/Equipo.php */