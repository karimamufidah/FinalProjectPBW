<?php

class Pendaftaran extends CI_Controller {
    
    function __construct(){
    parent::__construct();
    $this->load->model('modelpendaftaran');
    $this->load->helper('url');

  }

  function index(){
    $data['pendaftaran'] = $this->modelpendaftaran->tampil_data()->result();
    $this->load->view('tabelpendaftaran',$data);
  }

  function edit($id){
    $where = array('id' => $id);
    $data['pendaftaran'] = $this->modelpendaftaran->edit_data($where,'pendaftaran')->result();
    $this->load->view('editpendaftaran',$data);
  }

  function update(){
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    
    $pesan = $this->input->post('pesan');

    $data = array(
			'nama' => $nama,
			'email' => $email,
            
            'pesan' => $pesan

			);

    $where = array('id' => $id);

    $this->modelpendaftaran->update_data($where,$data,'pendaftaran');
    redirect('pendaftaran');
  }

  function hapus($id){
  $where = array('id' => $id);
  $this->modelpendaftaran->hapus_data($where,'pendaftaran');
  redirect('tabelpendaftaran');
  }

  function tambah_aksi(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		//$Telepon = $this->input->post('telepon');
        $pesan = $this->input->post('pesan');

    $data = array(
			'nama' => $nama,
			'email' => $email,
			//'telepon' => $_POST['telepon'],
            'pesan' => $pesan

			);
      $result = $this->modelpendaftaran->input_data('pendaftaran', $data);
      
		redirect(base_url());
	}
}