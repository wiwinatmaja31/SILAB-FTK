<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Data Lokasi</h5>
							<div class="text-right">
							<p>
				<button type="submit" class="btn btn-slate-700"><a href="<?=site_url('Silab/register_lokasi')?>">Tambah Data <i class="icon-arrow-right14 position-right"></i></a></button>
							</p>
							</div>
							<p>           
            <form class="form-inline ml-3" action="<?= site_url('Silab/search_lokasi'); ?>" method="post">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="text" name="keyword" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">cari
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>          
	<p>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr class="bg-blue">
										<th>Nama Prodi</th>
										<th>Nama Lab</th>
										<th>Edit</th>
                                        <th>Delete</th>
									</tr>
								</thead>
                				<?php foreach($id_lokasi as $val){?>
                                    <tr>
                                        <td><?=$val['nama_prodi'];?></td>
                                        <td><?=$val['nama_lab'];?></td>
                                        <td><a href="<?=site_url('Silab/update_register_lokasi/'.md5($val['id_lokasi']))?>"class="btn btn-info btn-xs" class="fa fa-pencil"></i> Edit </a></td>
                                        <td><a href="<?=site_url('Silab/delete_lokasi/'.($val['id_lokasi']));?>"onclick="return confirm('anda yakin akan menghapus data ini');" class="btn btn-danger btn-xs" class="fa fa-trash-o"></i> Delete </a></td>
                                    </tr>
		
                            <?php } ?>
							</table>
			
              <?php echo $this->pagination->create_links();?>
						</div>
					</div>