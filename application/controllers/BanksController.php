<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BanksController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('BanksModel');
	}


	public function index(){
		$data = array();
		$data['banks'] = $this->BanksModel->listBanks();
		$this->load->view('banks/listBanks',$data);
	}

	public function createBank(){
		$this->load->view('banks/newBank');
	}

	public function newBank(){
		$this->form_validation->set_rules('bank[name_bank]', 'bank', 'trim|required');
		$this->form_validation->set_rules('bank[phone_bank]', 'bank', 'trim|required');

		if ($this->form_validation->run()) {
			if($this->BanksModel->insertBank($this->input->post('bank'))){
				redirect('/','refresh');
			}
		} 
	}

	public function listBanks(){
		$banks = $this->BanksModel->listBanks();
	}

	public function deleteBank($id_bank){
		if($this->BanksModel->deleteBank($id_bank)){
			redirect('/','refresh');
		}
	}

	public function updateBank($id_bank){
		$this->form_validation->set_rules('bank[id_bank]', 'bank', 'trim|required');
		$this->form_validation->set_rules('bank[name_bank]', 'bank', 'trim|required');
		$this->form_validation->set_rules('bank[phone_bank]', 'bank', 'trim|required');
		if ($this->form_validation->run()) {
			if ($this->BanksModel->updateBank($this->input->post('bank'))) {
				$data['banks'] = $this->BanksModel->listBanks();
				$this->load->view('banks/listBanks',$data);
			}
		} else {
			$data['bank']=$this->BanksModel->getBank($id_bank);
			$this->load->view('banks/updateBank', $data);
		}
	}
}
