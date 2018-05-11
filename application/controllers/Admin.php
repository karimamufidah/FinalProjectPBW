<?php

class Admin extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('modeladmin');
    $this->load->helper('url');

  }

  function index(){
    $data['kontak'] = $this->modeladmin->tampil_data()->result();
    $this->load->view('admin',$data);
  }

  function edit($id){
    $where = array('id' => $id);
    $data['kontak'] = $this->modeladmin->edit_data($where,'kontak')->result();
    $this->load->view('edit',$data);
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

    $this->modeladmin->update_data($where,$data,'kontak');
    redirect('admin');
  }

  function hapus($id){
  $where = array('id' => $id);
  $this->modeladmin->hapus_data($where,'kontak');
  redirect('admin/index');
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
      $result = $this->modeladmin->input_data('kontak', $data);
      
		redirect(base_url());
	}
}
