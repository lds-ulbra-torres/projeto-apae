<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BanksModel extends CI_Model {

	private $table = "banks";

	public function Create($bank){
		return $this->db->insert($this->table,$bank) > 0 ? TRUE : FALSE;
	}

	public function GetAll(){
		$banks = $this->db->get($this->table)->result_array();
		return empty($banks)? null : $banks;
	}

	public function Delete($id_bank){
		$this->db->where('id_bank',$id_bank);
		return $this->db->delete($this->table) > 0 ? TRUE : FALSE;
	}

	public function GetOne($id_bank){
		$this->db->where('id_bank', $id_bank);
		return $this->db->get($this->table)->result_array();
	}

	public function Update($bank){
		$this->db->where('id_bank',$bank['id_bank']);
		if($this->db->update($this->table,$bank)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}