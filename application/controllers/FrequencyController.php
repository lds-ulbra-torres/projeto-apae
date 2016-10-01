<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrequencyController extends CI_Controller
{

    public function index()
    {
        $data['frequencies'] = $this->FrequencyModel->getAll();
        $this->template->load('template', 'frequency/frequencyView', $data);
    }

    public function viewInsert()
    {
        $this->template->load('template', 'frequency/frequencyCreateView');
    }

    public function insert()
    {
        $this->form_validation->set_rules('frequency[nameType]', 'nameType', 'trim|required');

        if ($this->form_validation->run()) {
            if ($this->FrequencyModel->insert($this->input->post('frequency'))) {
                redirect(site_url(''), 'refresh');
            } else {
                redirect(site_url('view-insert'), 'refresh');
            }
        } else {
            echo "Não rodou o form validadtion.";
        }
    }

    public function viewUpdate($pId)
    {
        $data['frequency'] = $this->FrequencyModel->getOne($pId);
        $this->template->load('template', 'frequency/frequencyUpdateView', $data);
    }

    public function update()
    {
        $this->form_validation->set_rules('frequency[nameType]', 'nameType', 'trim|required');

        if ($this->form_validation->run()) {
            if ($this->FrequencyModel->update($this->input->post('frequency'))) {
                redirect(site_url(''), 'refresh');
            } else {
                redirect(site_url('view-update'), 'refresh');
            }
        } else {
            echo "Não rodou o form validadtion.";
        }
    }

    //Delete one item
    public function delete($pId)
    {
        if ($this->FrequencyModel->delete($pId)) {
            //redireciona pra rota default
            redirect(site_url(''));
        } else {
            echo "Deu merda.";
        }
    }
}

