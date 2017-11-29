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
		$fecha=date('Y-m-d H:i:s');
		$estatus= "INACTIVO";
		$foto='http://localhost/mcnews-cr/public/webcamjs-master/uploads/'.$data['fotoA'];
		$query=$this->db->insert('registro',array('nombre' => $data['nombre'],'apellido' => $data['apellido'],'foto' => $foto,'fecha' => $fecha ,'estatus' => $estatus));
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