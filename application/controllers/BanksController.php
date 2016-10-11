<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BanksController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('BanksModel');
	}

	public function index(){
		$data = array();
		$data['banks'] = $this->BanksModel->GetAll();
		$this->load->view('banks/listBanks',$data);
	}

	public function add(){
		$this->load->view('banks/newBank');
	}

	public function create(){
		if($this->BanksModel->Create($this->input->post('bank'))){
			redirect('/','refresh');
		}
	}


	public function delete($id_bank){
		if($this->BanksModel->Delete($id_bank)){
			redirect('/','refresh');
		}
	}

	public function update($id_bank){
		if ($this->BanksModel->Update($this->input->post('bank'))) {
			$data['banks'] = $this->BanksModel->GetAll();
			$this->load->view('banks/listBanks',$data);
		}
	}

	public function edit($id_bank){
		$data['bank']=$this->BanksModel->getOne($id_bank);
		$this->load->view('banks/updateBank', $data);
	}
}
