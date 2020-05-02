<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Data Aset</h5>
							<div class="text-right">
							<p>
				<button type="submit" class="btn btn-slate-700"><a href="<?=site_url('Silab/register_aset')?>">Tambah Data <i class="icon-arrow-right14 position-right"></i></a></button>
							</p>
							</div>
							<p>           
            <form class="form-inline ml-3" action="<?= site_url('Silab/search_aset'); ?>" method="post">
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
									<th>No</th>
									<th>Nama Lokasi</th>
									<th>Nama Barang</th>
                                    <th>Spesifikasi</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                    <th>Keterangan</th>
                                    <th>Foto</th>
									<th>Edit</th>
									<th>Delete</th>
								</thead>
                                <?php
								$no =1;
											foreach($kode_aset as $val){?>
												<tr>
													<td><?php echo $no++ ?></td>
                                                    <td><?=$val['nama_lab'];?></td>
													<td><?=$val['nama_barang'];?></td>
													<td><?=$val['spesifikasi'];?></td>
                                                    <td><?=$val['jumlah'];?></td>
                                                    <td><?=$val['satuan'];?></td>
                                                    <td><?=$val['keterangan'];?></td>
                                                    <td><img width='130' src="<?=base_url('media/images/'.$val['foto']);?>"></td>
													<td><a href="<?=site_url('Silab/update_register_aset/'.md5($val['kode_aset']))?>"class="btn btn-info btn-xs" class="fa fa-pencil"></i> Edit </a></td>
                                        			<td><a href="<?=site_url('Silab/delete_aset/'.($val['kode_aset']));?>"onclick="return confirm('anda yakin akan menghapus data ini');" class="btn btn-danger btn-xs" class="fa fa-trash-o"></i> Delete </a></td>
												</tr>
											<?php } ?>
							</table>
			
              <?php echo $this->pagination->create_links();?>
						</div>
					</div>