<form class="form-horizontal" action="<?=site_url('Silab/save_register_lokasi'); ?>" method="POST">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">INPUT DATA LOKASI</h5>
										<input type="hidden" name="id_lokasi" value="<?=(isset($id_lokasi['id_lokasi']))?md5($id_lokasi['id_lokasi']):'';?>">
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
												Masukan Data Lokasi
												<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>

											<div class="collapse in" id="demo1">
												<div class="form-group">
													<label class="col-lg-3 control-label">Nama Prodi:</label>
													<div class="col-lg-9">
                                                    <select name="id_prodi">
														<?php
													foreach($nama_prodi as $val){?>
													<option value="<?=$val['id_prodi'];?>"><?=$val['nama_prodi'];?></option>
													<?php } ?>
													</select>
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Nama Lab:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="nama_lab" placeholder="Masukan Nama Lab" value="<?=(isset($id_lokasi['nama_lab']))?($id_lokasi['nama_lab']):'';?>"/>
														<?=form_error('jurusan');?>
													</div>
												</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>

										</fieldset>
                                        </form>
