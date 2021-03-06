<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PartnerModel extends CI_Model {

	private $table = 'partners';

	public function create($partner){

		$this->db->insert('partners', $partner);
		return $this->db->insert_id();
	}

	public function update($partner){
		$this->db->where('id_partner', $partner['id_partner']);
		var_dump($partner);
		$this->db->set($partner);
		return $this->db->update('partners');
	}

	public function searchAll($limit=NULL, $offset=NULL, $search=NULL) {

		$this->db->join('category', 'partners.category_id_category = category.id_category','left');
		$this->db
			->group_start()
				->like('partners.owner_name_partner', $search)
				->or_group_start()
					->like('partners.cnpj_cpf_partner', $search)
				->group_end()
				->or_group_start()
					->like('partners.rg_inscription_partner', $search)
				->group_end()
				->or_group_start()
					->like('partners.fantasy_name_partner', $search)
				->group_end()
			->group_end();

			return $this->db->get($this->table, $limit, $offset)->result_array();

	}

	public function totalCount() {
    	return $this->db->count_all($this->table);
	}

	public function getPartners($limit=NULL, $offset=NULL){
		$this->db->join('city', 'partners.id_city = city.id_city');
		$this->db->join('state', 'city.id_state = state.id_state');
		$this->db->join('category', 'partners.category_id_category = category.id_category','left');
		return $this->db->get('partners', $limit, $offset)->result_array();

	}

	public function getAll($limit=NULL, $offset=NULL) {
    	return $this->db->get($this->table, $limit, $offset)->result();
	}

	public function getPartnerById($id){
		$this->db->where('id_partner', $id);
		$this->db->join('city', 'partners.id_city = city.id_city');
		$this->db->join('state', 'city.id_state = state.id_state');
		$this->db->join('category', 'partners.category_id_category = category.id_category','left');
		return $this->db->get('partners')->result_array()[0];
	}
	/**
     * @author Joziel O. Santos  - 19-04-2018 - pega parceiros .
     * @param id - id do parceiro
     * @return - retorna o parceiro;
     */
	public function getPartnerByIdAPI($id){
		$this->db->where('id_partner', $id);
		$this->db->join('city', 'partners.id_city = city.id_city');
		$this->db->join('state', 'city.id_state = state.id_state');
	    $this->db->select("id_partner, owner_name_partner, fantasy_name_partner, email_partner, cnpj_cpf_partner,
			rg_inscription_partner, cep_partner, street_partner, number_partner, neighborhood_partner,
			commercial_phone_partner, discount_partner, partners.id_city, photo_partner, category_id_category,  
			state.id_state, name_city, uf_state, name_state");
		return $this->db->get('partners')->result_array()[0];
	}
	//Version 2
	public function getPartnerByIdAPI_V2($id){
		$this->db->where('id_partner', $id);
		$this->db->join('city', 'partners.id_city = city.id_city');
		$this->db->join('state', 'city.id_state = state.id_state');
	 	return $this->db->get('partners')->result_array()[0];
	}
	/**
     * @author Joziel O. Santos  - 13-04-2018 - pega parceiros por categoria.
     * @param id - id da categoria a ser apagada
     * @return - retorna os parceiros por categoria;
     */
	public function getPartnerByCategory($id){
		$this->db->where('category_id_category', $id);
		$this->db->select('id_partner,fantasy_name_partner,photo_partner,discount_partner');
		return $this->db->get('partners')->result();
	}
	//Version 2	
	public function getPartnerByCategory_V2($id){
		$this->db->where('category_id_category', $id);
		$this->db->select('id_partner,fantasy_name_partner,photo_partner,discount_partner,
		term_discount_partner,card_discount_partner');
		return $this->db->get('partners')->result();
	}
	public function delete($id){
		$this->db->where('id_partner', $id);
		return $this->db->delete('partners');
	}
}

/* End of file PartnerModel.php */
/* Location: ./application/models/PartnerModel.php */
