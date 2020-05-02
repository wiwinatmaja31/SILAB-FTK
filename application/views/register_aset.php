<form class="form-horizontal" action="<?=site_url('Silab/save_register_aset');?>"  method="POST" enctype="multipart/form-data">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">INPUT DATA ASET</h5>
										<input type="hidden" name="kode_aset" value="<?=(isset($kode_aset['kode_aset']))?md5($kode_aset['kode_aset']):'';?>">
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
												Masukan Data Aset
												<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>
											<div class="collapse in" id="demo1">
												<div class="form-group">
													<label class="col-lg-3 control-label">Nama Lokasi:</label>
													<div class="col-lg-9">
                                                    <select name="id_lokasi">
														<?php
													foreach($nama_lab as $val){?>
													<option value="<?=$val['id_lokasi'];?>"><?=$val['nama_lab'];?></option>
													<?php } ?>
													</select>
													</div>
												</div>

											<div class="collapse in" id="demo1">
												<div class="form-group">
													<label class="col-lg-3 control-label">Nama Barang:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control"  name="nama_barang" placeholder="Masukan Nama Barang" class="col-xs-10 col-sm-5" value="<?=(isset($kode_aset['nama_barang']))?($kode_aset['nama_barang']):'';?>" />
														<?=form_error('nama_prodi');?>
													</div>
												</div>

												<div class="collapse in" id="demo1">
												<div class="form-group">
													<label class="col-lg-3 control-label">Spesifikasi:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control"  name="spesifikasi" placeholder="Masukan Spesifikasi" class="col-xs-10 col-sm-5" value="<?=(isset($kode_aset['spesifikasi']))?($kode_aset['spesifikasi']):'';?>" />
														<?=form_error('spesifikasi');?>
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-lg-3 control-label">Jumlah:</label>
													<div class="col-lg-9">
														<input type="number" class="form-control"  name="jumlah" placeholder="Masukan Jumlah Barang" class="col-xs-10 col-sm-5" value="<?=(isset($kode_aset['jumlah']))?($kode_aset['jumlah']):'';?>" />
														<?=form_error('fakultas');?>
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-lg-3 control-label">Satuan:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control"  name="satuan" placeholder="Masukan Satuan Barang" class="col-xs-10 col-sm-5" value="<?=(isset($kode_aset['satuan']))?($kode_aset['satuan']):'';?>" />
														<?=form_error('fakultas');?>
													</div>
												</div>


                                                
                                                <div class="form-group">
													<label class="col-lg-3 control-label">Keterangan:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan Barang" class="col-xs-10 col-sm-5" value="<?=(isset($kode_aset['keterangan']))?($kode_aset['keterangan']):'';?>" />
														<?=form_error('fakultas');?>
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-lg-3 control-label">Masukan Foto</label>
													<div class="col-lg-9">
														<input type="file" class="file-styled" name="foto">
														<span class="help-block">Accepted formats: pdf, doc. Max file size 2Mb</span>
													</div>
									</div>



										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>

										</fieldset>
                                        </form>
