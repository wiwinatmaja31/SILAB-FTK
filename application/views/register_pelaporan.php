<form class="form-horizontal" action="<?=site_url('Silab/save_register_pelaporan'); ?>" method="POST">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">INPUT DATA PELAPORAN</h5>
										<input type="hidden" name="id_pelaporan" value="<?=(isset($id_pelaporan['id_pelaporan']))?md5($id_pelaporan['id_pelaporan']):'';?>">
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>

									<div class="panel-body">
										<fieldset>
											<legend class="text-semibold">
												<i class="icon-file-text2 position-left"></i>
												Masukan Data pelaporan
												<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>

											<div class="collapse in" id="demo1">
												<div class="form-group">
													<label class="col-lg-3 control-label">Nama User:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="nama_pelaporan" placeholder="Masukan Nama pelaporan" value="<?=(isset($id_pelaporan['nama_pelaporan']))?($id_pelaporan['nama_pelaporan']):'';?>"/>
														<?=form_error('nama_pelaporan');?>
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Tanggal Lapor</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="tgl_lapor" placeholder="Masukan tanggal" value="<?=(isset($id_pelaporan['tgl_lapor']))?($id_pelaporan['tgl_pelapor']):'';?>"/>
														<?=form_error('tgl_masuk');?>
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-lg-3 control-label">Nama Barang:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="nama_barang" placeholder="Masukan pelaporan" value="<?=(isset($id_pelaporan['nama_barang']))?($id_pelaporan['nama_barang']):'';?>"/>
														<?=form_error('nama_barang');?>
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-lg-3 control-label">Deskripsi Laporan:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="Deskripsi_laporan" placeholder="Masukan pelaporan" value="<?=(isset($id_pelaporan['Deskripsi_laporan']))?($id_pelaporan['Deskripsi_laporan']):'';?>"/>
														<?=form_error('Deskripsi_laporan');?>
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Status:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="Status" placeholder="Masukan pelaporan" value="<?=(isset($id_pelaporan['Status']))?($id_pelaporan['Status']):'';?>"/>
														<?=form_error('Status');?>
													</div>
												</div>
                                                    <div class="form-group">
													<label class="col-lg-3 control-label">Tanggapan:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="tanggapan" placeholder="Masukan pelaporan" value="<?=(isset($id_pelaporan['tanggapan']))?($id_pelaporan['tanggapan']):'';?>"/>
														<?=form_error('tanggapan');?>
													</div>
												</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>

										</fieldset>
                                        </form>
