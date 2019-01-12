
<div class="container" style="margin-top: 20px">
	<div class="row">
		<div class="col-12 py-2">
			<a href="<?=base_url('page/create	')?>" class="btn btn-success"><i class="fas fa-plus"></i> Create Post<a>
		</div>
		
		<!-- Alert Sukses/Gagal/Update Page -->
		<?php if($this->session->flashdata('insert_page') == 'sukses'){ ?>
			<div class="col-md-12 py-2">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Sukses!</strong> Data berhasil disimpan di database..
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
			</div>
		<?php }else if($this->session->flashdata('insert_page') == 'gagal'){ ?>
			<div class="col-md-12 py-2">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Gagal!</strong> Data gagal disimpan di database..
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
			</div>
		<?php }else if($this->session->flashdata('update_page') == 'sukses'){ ?>
			<div class="col-md-12 py-2">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Sukses!</strong> Data berhasil diubah di database..
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
			</div>
		<?php }  else if($this->session->flashdata('delete_page') == 'sukses'){ ?>
			<div class="col-md-12 py-2">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Sukses!</strong> Data berhasil dihapus dari database..
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
			</div>
		<?php } 
			if(isset($error)){
				echo "<script>alert('ada')</script>";
				echo var_dump($error);
			}
		?>
		
		
		<!-- End Of Alert -->
	</div>
	<div class="row">
		
		<div class="col-12">	
			<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
			<tr>
			  <th class="col-1">No</th>
			  <th class="col-3">Judul</th>
			  <th class="col-2">Image</th>
			  <th class="col-2">Tanggal</th>
			  <th class="col-2">Terakhir Update</th>
			  <th class="col-2">Aksi</th>
			</tr>
		  </thead>
			<tbody>
			  <?php $no = 1;
				  foreach ($page as $row) {  ?>
			  <tr>
				<td><?=$no++?></td>
				<td><?=$row->judul_post?></td>
				<td><img class="img-fluid" src="<?=base_url($row->image)?>" height="100px" width="100px" alt=""></td>
				<td><?=$row->tanggal_post?></td>
				<td><?=$row->tanggal?></td>
				<td><a href="<?=base_url('event/'.$row->slug_post)?>" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
					<a href="<?=base_url()?>page/edit/<?=$row->slug_post?>" class="btn btn-primary"><i class="far fa-edit"></i></a>
					<?= form_open('page/delete') ?>
					<input type="hidden" name="slug" value="<?=$row->slug_post?>">
					<a href="" onclick="form.submit()" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
					<?= form_close();?>
			  </tr>
			<?php } ?>
			</tbody>
			</table>
		</div>
	</div>
</div>
