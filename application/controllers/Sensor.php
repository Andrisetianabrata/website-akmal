<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sensor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data');
    }

    public function index()
    {
        // Memanggil form index.php dari ./view/index.php
        $data['data']=$this->data->getDataStatus();
        $this->load->view('index', $data);
    }

    public function dataSuhu()
    {
        $record = $this->data->getDataSensor();
        $data   = array('data_sensor' => $record);

        $this->load->view('datasuhu', $data);
    }

    public function dataHumi()
    {
        $record = $this->data->getDataSensor();
        $data   = array('data_sensor' => $record);

        $this->load->view('datahumi', $data);
    }

    public function kirimdata()
    {
        $suhu = $this->uri->segment(3);
        $humi = $this->uri->segment(4);

        $dataupdate = array(
            'suhu' => $suhu, // Mengirim data $suhu ke database suhu
            'kelembaban' => $humi, // Mengirim data $humi ke database kelembaban
        );

        $this->data->UpdateData($dataupdate);
    }

    public function kirimDataStatus()
    {
        $status = $this->uri->segment(3);

        $statusUpdate = array(
            'status' => $status,
        );
        $this->data->updateStatus($statusUpdate);
    }
}

?>
