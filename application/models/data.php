<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data extends CI_Model
{
    public function getDataSensor()
    {
        $this->db->select('*');
        $this->db->from('tb_sensor');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    public function getDataStatus()
    {
        $hasil = $this->db->query("select * from tb_data order by id asc");
        return $hasil;
    }

    public function UpdateData($dataupdate)
    {
        $this->db->update('tb_sensor', $dataupdate);
    }

    public function UpdateStatus($statusUpdate)
    {
        $this->db->update('tb_data', $statusUpdate);
    }
}

?>