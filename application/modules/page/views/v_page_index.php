
<div class="container" style="margin-top: 20px">
	<div class="row">
		<div class="col-md-12 py-2 ">
			<a href="<?=base_url('page/create')?>" class="btn btn-success"><i class="fas fa-plus"></i> Create Post<a>
		</div>
		<div class="col-md-12">
			<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
			<tr>
			  <th>No</th>
			  <th>Judul</th>
			  <th>Image</th>
			  <th>Tanggal</th>
			  <th>Terakhir Update</th>
			  <th>Aksi</th>
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
				<td><a href="<?=base_url('event/'.$row->slug_post)?>" class="btn btn-info"><i class="fas fa-info-circle"></i></a>  <a href="<?=base_url()?>page/edit/<?=$row->slug_post?>" class="btn btn-primary"><i class="far fa-edit"></i></a>
				<a href="<?=base_url()?>page/delete/<?=$row->slug_post?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>            
			  </tr>
			<?php } ?>
			</tbody>
			</table>
		</div>
	</div>
</div>
