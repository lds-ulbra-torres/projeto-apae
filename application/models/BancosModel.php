<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BancosModel extends CI_Model {

	private $table = "bancos";

	public function inserirBanco($banco){
		return $this->db->insert($this->table,$banco) > 0 ? TRUE : FALSE;
	}

	public function listarBancos(){
		$bancos = $this->db->get($this->table)->result_array();
		return empty($bancos)? null : $bancos;
	}

	public function deletarBanco($id_banco){
		$this->db->where('id_banco',$id_banco);
		return $this->db->delete($this->table) > 0 ? TRUE : FALSE;
	}

	public function retornaBanco($id_banco){
		$this->db->where('id_banco', $id_banco);
		return $this->db->get($this->table)->result_array();
	}

	public function retornaID(){
		$this->db->select('');
		$result = $query->row_array();
		$count = $result['COUNT(*)'];
		return $this->db->get($this->table)->result_array();
	}

	public function alterarBanco($banco){
		$this->db->where('id_banco',$banco['id_banco']);
		if($this->db->update($this->table,$banco)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}
/* End of file BancosModel.php */
/* Location: ./application/models/BancosModel.php */