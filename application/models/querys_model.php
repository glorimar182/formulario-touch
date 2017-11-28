<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Querys_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function insertRegistro($data){
		$fecha=date('Y-m-d H:m:s');
		$estatus= "INACTIVO";
		$query=$this->db->insert('registro',array('nombre' => $data['nombre'],'foto' => $data['fotoA'],'fecha' => $fecha ,'estatus' => $estatus));
		return $query;
	}	

	function selectRegistro(){
		$query=$this->db->select('*')->from('registro');
		$query->where('estatus','INACTIVO');
		$query->order_by('fecha');
		$query->limit(1);
		return $query->get()->result_array();
	}

	function updateRegistro($cont){
		$query=$this->db->update('registro', array('estatus' => $cont['estatus']), array('id' => $cont['id']));
	}
}