<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BanksModel extends CI_Model {

	private $table = "banks";

	public function insertBank($bank){
		return $this->db->insert($this->table,$bank) > 0 ? TRUE : FALSE;
	}

	public function listBanks(){
		$banks = $this->db->get($this->table)->result_array();
		return empty($banks)? null : $banks;
	}

	public function deleteBank($id_bank){
		$this->db->where('id_bank',$id_bank);
		return $this->db->delete($this->table) > 0 ? TRUE : FALSE;
	}

	public function getBank($id_bank){
		$this->db->where('id_bank', $id_bank);
		return $this->db->get($this->table)->result_array();
	}

	public function getID(){
		$this->db->select('');
		$result = $query->row_array();
		$count = $result['COUNT(*)'];
		return $this->db->get($this->table)->result_array();
	}

	public function updateBank($bank){
		$this->db->where('id_bank',$bank['id_bank']);
		if($this->db->update($this->table,$bank)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}
/* End of file BancosModel.php */
/* Location: ./application/models/BancosModel.php */