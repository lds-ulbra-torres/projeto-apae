<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BancosController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('BancosModel');
	}


	public function index(){
		$this->load->view('bancos/bancos');
		
	}

	public function novoBanco(){
		$this->form_validation->set_rules('banco[nome_banco]', 'banco', 'trim|required');
		$this->form_validation->set_rules('banco[telefone_banco]', 'banco', 'trim|required');

		if ($this->form_validation->run()) {
			if($this->BancosModel->inserirBanco($this->input->post('banco'))){
				redirect('/','refresh');
			}
		} else {
			echo "Algo deu errado";
		}
	}

	public function listarBancos(){
		$data['bancos'] = $this->BancosModel->listarBancos();
		$this->load->view('bancos/listaBancos',$data);
	}

	public function deletarBanco($id_banco){
		if($this->BancosModel->deletarBanco($id_banco)){
			$this->load->view('bancos/bancos');
		}
	}

	public function alterarBanco($id_banco){
		$this->form_validation->set_rules('banco[id_banco]', 'banco', 'trim|required');
		$this->form_validation->set_rules('banco[nome_banco]', 'banco', 'trim|required');
		$this->form_validation->set_rules('banco[telefone_banco]', 'banco', 'trim|required');
		if ($this->form_validation->run()) {
			if ($this->BancosModel->alterarBanco($this->input->post('banco'))) {
				$data['bancos'] = $this->BancosModel->listarBancos();
				$this->load->view('bancos/listaBancos',$data);
			}
		} else {
			$data['banco']=$this->BancosModel->retornaBanco($id_banco);
			$this->load->view('bancos/alteraBanco', $data);
		}
	}
}
