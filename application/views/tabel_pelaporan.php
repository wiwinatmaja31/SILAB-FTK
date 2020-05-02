<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Data Pelaporan</h5>
							<div class="text-right">
							<p>
				<button type="submit" class="btn btn-slate-700"><a href="<?=site_url('Silab/register_pelaporan')?>">Tambah Data <i class="icon-arrow-right14 position-right"></i></a></button>
							</p>
							</div>
                            <p>           
            <form class="form-inline ml-3" action="<?= site_url('Silab/search_pelaporan'); ?>" method="post">
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
                          <th>Nama User</th>
                          <th>Tanggal Lapor</th>
                          <th>Nama Barang</th>
                          <th>Deskripsi Laporan</th>
                          <th>Status</th>
                          <th>Tanggapan</th>
						  <th>Edit</th>
                          <th>Delete</th>
				</tr>
				</thead>
                      <?php 
                      $no = 1;
                      foreach($id_pelaporan as $val){?>
												<tr>
                          <td><?php echo $no++ ?></td>
                          <td><?=$val['nama'];?></td>
                          <td><?=$val['tgl_lapor'];?></td>
                          <td><?=$val['nama_barang'];?></td>
                          <td><?=$val['deskripsi_laporan'];?></td>
                          <td><?=$val['status'];?></td>
                          <td><?=$val['tanggapan'];?></td>
						  <td>
                          <a href="<?=site_url('Silab/update_register_pelaporan/'.md5($val['id_pelaporan']))?>"><i class="fas fa-pencil-alt"></i></a>
						  <a href="<?=site_url('Silab/delete_pelaporan/'.($val['id_pelaporan']));?>"onclick="return confirm('Anda yakin akan menghapus data ini ?');"><i class="fas fa-eraser"></i></a>
                          </td>
							</tr>
		
                            <?php } ?>
							</table>
			
              <?php echo $this->pagination->create_links();?>
						</div>
					</div>