<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	public function lista()
	{
		// llamo a mi vista
		$html = $this->load->view('personal/lista', array(), TRUE);
		// Llamo a la plantilla
		$this->load->view("inicio/principal", array("html"=> $html));
	}

	public function add()
	{
		// llamo a mi vista
		$html = $this->load->view('personal/add', array(), TRUE);
		// Llamo a la plantilla
		$this->load->view("inicio/principal", array("html"=> $html));
	}
	public function salarios()
	{
		// llamo a mi vista
		$html = $this->load->view('personal/salarios', array(), TRUE);
		// Llamo a la plantilla
		$this->load->view("inicio/principal", array("html"=> $html));
	}

	public function nomina()
	{
		// llamo a mi vista
		$html = $this->load->view('personal/nomina', array(), TRUE);
		// Llamo a la plantilla
		$this->load->view("inicio/principal", array("html"=> $html));
	}
	public function cargos()
	{
		// llamo a mi vista
		$html = $this->load->view('personal/cargos', array(), TRUE);
		// Llamo a la plantilla
		$this->load->view("inicio/principal", array("html"=> $html));
	}
	public function itempersonal()
	{
		// llamo a mi vista
		$html = $this->load->view('personal/itempersonal', array(), TRUE);
		// Llamo a la plantilla
		$this->load->view("inicio/principal", array("html"=> $html));
	}


}
