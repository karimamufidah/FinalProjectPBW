<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Pendaftaran Khitan</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/assets/img/logo.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/assets/css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/assets/img/bg.jpg')">
	    <!--   Creative Tim Branding   -->
	    <a href="beranda">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/assets/img/panah.png">
	            </div>
	            <div class="brand">
	                Kembali ke Menu
	            </div>
	        </div>
	    </a>

		<!--  Made With Material Kit  -->
		<!-- <a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">MK</div>
			<div class="made-with">Made with <strong>Material Kit</strong></div>
		</a> -->

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
                            <form action="<?php echo base_url(). 'pendaftaran/tambah_aksi'; ?>" method="post">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Formulir Pendaftaran
		                        	</h3>
									<h5>Isilah formulir di bawah ini dengan sebenar-benarnya.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">Tahap Satu</a></li>
			                            <li><a href="#captain" data-toggle="tab">Tahap Dua</a></li>
			                            <li><a href="#description" data-toggle="tab">Tahap Tiga</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
			                                	<h4 class="info-text"> Data Orang Tua Bapak/Ibu Pasien Khitan</h4>
			                            	</div>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<!-- <i class="material-icons">email</i> -->
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Nama Lengkap</label>
			                                          	<input name="namalengkap" type="text" class="form-control" required>
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<!-- <i class="material-icons">lock_outline</i> -->
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">No. KTP</label>
			                                          	<input name="noktp" type="text" class="form-control" size="16" required>
			                                        </div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<!-- <i class="material-icons">lock_outline</i> -->
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Alamat</label>
			                                          	<input name="alamat" type="text" class="form-control" required>
			                                        </div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<!-- <i class="material-icons">lock_outline</i> -->
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Kelurahan/Kecamatan</label>
			                                          	<input name="kelurahankecamatan" type="text" class="form-control" required>
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-6">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Hubungan</label>
	                                        		<select name="hubungan" class="form-control" required>
														<option disabled="" selected=""></option>
	                                                	<option value="Ayah"> Ayah </option>
	                                                	<option value="Ibu"> Ibu </option>
	                                                	<option value="Saudara"> Saudara </option>
		                                        	</select>
		                                    	</div>
												<div class="form-group label-floating">
		                                        	<label class="control-label">Pendidikan Terakhir</label>
	                                        		<select name="pendidikan" class="form-control" required>
														<option disabled="" selected=""></option>
	                                                	<option value="SMP"> SMP </option>
	                                                	<option value="SMA"> SMA </option>
	                                                	<option value="Diploma"> Diploma </option>
	                                                	<option value="S1/S2"> S1/S2 </option>
                                                        <option value="Lainnya"> Lainnya </option>
		                                        	</select>
		                                    	</div>
													<div class="form-group label-floating">
			                                          	<label class="control-label">RT/RW</label>
			                                          	<input name="RTRW" type="text" class="form-control" required>
			                                        </div>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Kab/Kota</label>
			                                          	<input name="kabkota" type="text" class="form-control" required>
			                                        </div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="captain">
		                                <div class="row">
			                            	<div class="col-sm-12">
			                                	<h4 class="info-text"> Data Orang Tua Bapak/Ibu Pasien Khitan</h4>
			                            	</div>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<!-- <i class="material-icons">email</i> -->
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Telepon/Fax/HP</label>
			                                          	<input name="telepon" type="text" class="form-control" required>
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<!-- <i class="material-icons">lock_outline</i> -->
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Email</label>
			                                          	<input name="email" type="email" class="form-control" required>
			                                        </div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<!-- <i class="material-icons">lock_outline</i> -->
													</span>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<!-- <i class="material-icons">lock_outline</i> -->
													</span>
												</div>
		                                	</div>
		                                	<div class="col-sm-6">
                                                <div class="form-group label-floating">
			                                          	<label class="control-label">Nama Anak Yang Dikhitan</label>
			                                          	<input name="namaanak" type="text" class="form-control" required>
			                                        </div>
		                                    	<div class="form-group label-floating">
			                                          	<label class="control-label">Umur</label>
			                                          	<input name="umur" type="text" class="form-control" required>
			                                        </div>
												<div class="form-group label-floating">
		                                        	<label class="control-label">Riwayat Penyakit Yang Dikhitan</label>
	                                        		<select name="riwayat" class="form-control" required>
														<option disabled="" selected=""></option>
	                                                	<option value="Ada"> Ada </option>
	                                                	<option value="Tidak Ada"> Tidak Ada </option>
		                                        	</select>
		                                    	</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                   <div class="col-sm-12">
			                                	<h4 class="info-text"> Metode Yang Dipilih</h4>
			                            	</div>
		                                    <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<!-- <i class="material-icons">lock_outline</i> -->
													</span>
													<div class="form-group label-floating">
		                                        	<label class="control-label">Pilih Metode</label>
	                                        		<select name="metode" class="form-control" required>
														<option disabled="" selected=""></option>
	                                                	<option value="Standar"> Standar </option>
	                                                	<option value="Cauter/Laser"> Cauter/Laser </option>
	                                                	<option value="Alisklamp"> Alisklamp </option>
                                                        <option value="Superklamp/Superrings"> Superklamp/Superrings </option>
                                                        <option value="Stapler"> Stapler </option>
		                                        	</select>
		                                    	</div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<!-- <i class="material-icons">lock_outline</i> -->
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Tentukan Tanggal Khitan</label>
			                                          	<input name="tanggalkhitan" type="date" class="form-control" required>
			                                        </div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<!-- <i class="material-icons">lock_outline</i> -->
													</span>
												</div>
		                                	</div>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating">
			                                          	<label class="control-label">Kode Verifikasi</label>
			                                          	<input name="kode" type="text" class="form-control" required>
			                                        </div>
		                                	</div>
		                                </div>
		                            </div>
		                        </div>
	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Selanjutnya' />
	                                    <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Selesai' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Sebelumnya' />

										<!-- <div class="footer-checkbox">
											<div class="col-sm-12">
											  <div class="checkbox">
												  <label>
													  <input type="checkbox" name="optionsCheckboxes">
												  </label>
												  Subscribe to our newsletter
											  </div>
										  </div>
										</div> -->
	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	             <p class="copy-right">&copy;2018 Sunat Modern. All rights reserved.
	        </div>
	    </div>
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="assets/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/assets/js/jquery.validate.min.js"></script>
</html>
