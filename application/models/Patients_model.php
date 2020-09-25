<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function buscar($id= false)
    {
        if($id):
            $this->db->where('id_patient', $id);
            $query = $this->db->get('tb_patients');
            return $query->row();
        endif;

        $query = $this->db->get('tb_patients');
        return $query->result();
    }
    
    public function adicionar($data)
    {
        if($this->db->insert('tb_patients', $data)):
            return true;
        endif;
        return false;
    }


    public function editar($data, $id)
    {
        if($id):
            $this->db->where('id_patient', $id);
            if($this->db->update('tb_patients', $data)):
                return true;
            endif;
            return false;
        endif;
        return false;
    }



    public function excluir($id)
    {
        if($id):
            $this->db->where('id_patient', $id);
            if($this->db->delete('tb_patients')):
                return true;
            endif;
            return false;
        endif;
        return false;
    }
   
}