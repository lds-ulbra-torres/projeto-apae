<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrequencyModel extends CI_Model
{
    public $table = "frequency";

    public function getAll()
    {
        $this->db->from($this->table);
        $query = $this->db->get()->result_array();
        return empty($query) ? null : $query;
    }

    public function getOne($pIdFrequency)
    {
        $this->db->where('idFrequency', $pIdFrequency);
        return $this->db->get($this->table)->result_array();
    }

    public function insert($pFrequencyArray)
    {
        return $this->db->insert($this->table, $pFrequencyArray) > 0 ? TRUE : FALSE;
    }

    public function update($pFrequency)
    {
        $this->db->where('idFrequency', $pFrequency['idFrequency']);
        if ($this->db->update($this->table, $pFrequency)) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($pId)
    {
        $this->db->where('idFrequency', $pId);
        return $this->db->delete($this->table) > 0 ? TRUE : FALSE;
    }

}
