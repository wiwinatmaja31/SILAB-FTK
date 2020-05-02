<form class="form-horizontal" action="<?=site_url('Silab/save_register_prodi'); ?>" method="POST">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">INPUT DATA PRODI</h5>
										<input type="hidden" name="id_prodi" value="<?=(isset($id_prodi['id_prodi']))?md5($id_prodi['id_prodi']):'';?>">
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
												Masukan Data Prodi
												<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>

											<div class="collapse in" id="demo1">
												<div class="form-group">
													<label class="col-lg-3 control-label">Nama Prodi:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="nama_prodi" placeholder="Masukan Nama Prodi" value="<?=(isset($id_prodi['nama_prodi']))?($id_prodi['nama_prodi']):'';?>"/>
														<?=form_error('nama_prodi');?>
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Jurusan:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="jurusan" placeholder="Masukan Jurusan" value="<?=(isset($id_prodi['jurusan']))?($id_prodi['jurusan']):'';?>"/>
														<?=form_error('jurusan');?>
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-lg-3 control-label">Fakultas:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="fakultas" placeholder="Masukan Fakultas" value="<?=(isset($id_prodi['fakultas']))?($id_prodi['fakultas']):'';?>"/>
														<?=form_error('fakultas');?>
													</div>
												</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>

										</fieldset>
                                        </form>
