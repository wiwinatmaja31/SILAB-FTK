<form class="form-horizontal" action="<?=site_url('Silab/save_register_user'); ?>" method="POST">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">INPUT DATA USER</h5>
										<input type="hidden" name="id_user" value="<?=(isset($id_user['id_user']))?md5($id_user['id_user']):'';?>">
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
												Masukan Data User
												<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>

											<div class="collapse in" id="demo1">
												<div class="form-group">
													<label class="col-lg-3 control-label">Nama :</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="<?=(isset($id_user['nama']))?($id_user['nama']):'';?>"/>
														<?=form_error('nama');?>
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-lg-3 control-label">Password:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="password" placeholder="Masukan Password" value="<?=(isset($id_user['password']))?($id_user['password']):'';?>"/>
														<?=form_error('password');?>
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Jabatan:</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="jabatan" placeholder="Masukan Jabatan" value="<?=(isset($id_user['jabatan']))?($id_user['jabatan']):'';?>"/>
														<?=form_error('jabatan');?>
													</div>
												</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>

										</fieldset>
                                        </form>
