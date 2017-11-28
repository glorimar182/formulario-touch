<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('querys_model');
	}

	// Pagina principal
	public function index() {
		$this->load->View('registro');
	}

	// Validacion del usuario
	public function recibirDatos() {
		$data= array(
			'nombre' => $this->input->post('nombre'),
			'fotoA' => $this->input->post('fotoA')
			);
		$this->querys_model->insertRegistro($data);
		redirect(base_url());
	}

	public function mensaje(){
		$this->load->view('mensaje');
	}
	
	public function mostrar(){
		$data['registros']=$this->querys_model->selectRegistro();
		$this->load->view('bienvenida',$data);	
		foreach ($data['registros'] as $d) {
		$cont['id']=$d['id'];
		$cont['estatus']='ACTIVO';
		$this->querys_model->updateRegistro($cont);
		}
	}

	public function actualizar(){
		$data['estatus']='ACTIVO';
		$data['id']=$this->uri->segment(3);
		
		
	}

}
