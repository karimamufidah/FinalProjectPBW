<?php

class FeedbackExcel extends CI_Controller{
function __construct(){
    parent::__construct();
        $this->load->model('modeladmin');
    $this->load->helper('url');
  }

  function index(){
     $data['kontak'] = $this->modeladmin->tampil_data()->result();
    $this->load->view('tabelfeedback',$data);
  }

  function download(){
    $filename = 'laporanfeedback.xls';
  header('Content-Type:   application/ms-excel');
  header('Content-Disposition: attachment; filename=' .$filename);
  $data['kontak'] = $this->modeladmin->tampil_data()->result();
    $this->load->view('downloadfeedback',$data);

  }
}