<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('Grocery_CRUD');
	}


	public function index()
	{
		
	}

	public function salario()
	{
		
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('flexigrid');
			$crud->set_table('salarios');
			$crud->set_subject('Nivel salarial');
			$crud->required_fields('nivelsalarial','salariomensual');
			$crud->columns('nivelsalarial', 'salariomensual', 'tiposalario');

			$output = $crud->render();// esto es la visualizacion del crud

			$html = $this->load->view("crud", (array) $output , TRUE);	
			$this->miVista($html);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}


	public function cargo()
	{
		
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('flexigrid');
			$crud->set_table('cargos');
			$crud->set_subject('Cargos nomina');
			$crud->columns('nombrecargol', 'salarioincidencia', 'salarios_idsalarios');
			$crud->set_relation('salarios_idsalarios','salarios','{idsalarios} - {nivelsalarial} ( {tiposalario} )');

			$output = $crud->render();// esto es la visualizacion del crud

			$html = $this->load->view("crud", (array) $output , TRUE);	
			$this->miVista($html);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}


	public function miVista($html)
	{
		
		// Llamo a la plantilla
		$this->load->view("inicio/principal", array("html"=> $html));
	}

}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */