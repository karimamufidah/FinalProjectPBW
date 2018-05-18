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
    $namalengkap = $this->input->post('namalengkap');
    $noktp = $this->input->post('noktp');
    $alamat = $this->input->post('alamat');
    $kelurahankecamatan = $this->input->post('kelurahankecamatan');
    $hubungan = $this->input->post('hubungan');
    $pendidikan = $this->input->post('pendidikan');
    $RTRW = $this->input->post('RTRW');
    $kabkota = $this->input->post('kabkota');
    $telepon = $this->input->post('telepon');
    $email = $this->input->post('email');
    $namaanak = $this->input->post('namaanak');
    $umur = $this->input->post('umur');
    $riwayat = $this->input->post('riwayat');
    $metode = $this->input->post('metode');
    $tanggalkhitan = $this->input->post('tanggalkhitan');

    $data = array(
			'namalengkap' => $namalengkap,
            'noktp' => $noktp,
            'alamat' => $alamat,
            'kelurahankecamatan' => $kelurahankecamatan,
            'hubungan' => $hubungan,
            'pendidikan' => $pendidikan,
            'RTRW' => $RTRW,
            'kabkota' => $kabkota,
            'telepon' => $telepon,
            'email' => $email,
            'namaanak' => $namaanak,
            'umur' => $umur,
            'riwayat' => $riwayat,
            'metode' => $metode,
            'tanggalkhitan' => $tanggalkhitan,

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
    $id = $this->input->post('id');
    $namalengkap = $this->input->post('namalengkap');
    $noktp = $this->input->post('noktp');
    $alamat = $this->input->post('alamat');
    $kelurahankecamatan = $this->input->post('kelurahankecamatan');
    $hubungan = $this->input->post('hubungan');
    $pendidikan = $this->input->post('pendidikan');
    $RTRW = $this->input->post('RTRW');
    $kabkota = $this->input->post('kabkota');
    $telepon = $this->input->post('telepon');
    $email = $this->input->post('email');
    $namaanak = $this->input->post('namaanak');
    $umur = $this->input->post('umur');
    $riwayat = $this->input->post('riwayat');
    $metode = $this->input->post('metode');
    $tanggalkhitan = $this->input->post('tanggalkhitan');

    $data = array(
			'namalengkap' => $namalengkap,
            'noktp' => $noktp,
            'alamat' => $alamat,
            'kelurahankecamatan' => $kelurahankecamatan,
            'hubungan' => $hubungan,
            'pendidikan' => $pendidikan,
            'RTRW' => $RTRW,
            'kabkota' => $kabkota,
            'telepon' => $telepon,
            'email' => $email,
            'namaanak' => $namaanak,
            'umur' => $umur,
            'riwayat' => $riwayat,
            'metode' => $metode,
            'tanggalkhitan' => $tanggalkhitan,

			);
      $result = $this->modelpendaftaran->input_data('pendaftaran', $data);
      
		redirect(base_url());
	}
}