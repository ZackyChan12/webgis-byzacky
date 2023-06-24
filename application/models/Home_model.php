<?php
class Home_Model extends CI_Model 
{
    public function get_atm()
    {
        $query = $this->db->get('atm');
        return $query->result();
    }

    public function get_detail($id_atm)
    {
        //$query =$this->db->get_where('atm', ['id_atm' => $id]);
        //return $query->result_array();
        return $this->db->get_where('atm', ['id_atm' => $id_atm])->result_array();
    }

    public function get_gambar($id_atm)
    {
        //$query =$this->db->get_where('dokumentasi_atm', ['id_atm' => $id]);
        //return $query->result_array();
        return $this->db->get_where('dokumentasi_atm', ['id_atm' => $id_atm])->result_array();
    }

    public function detail($id_atm)
    {
        $this->db->select('*');
        $this->db->from('atm');
        $this->db->where('id_atm', $id_atm);
        return $this->db->get()->row();

    }

}