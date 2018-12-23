<div class="container">
  <span class="muted-text"></span>
  <div class="row py-5">
    <div class="col-sm-8">
		<div class="card">
			
		  <div class="card-body">
			<h4 class="card-title"><?=$page->judul_post?></h4>
			<div class="col-12 col-sm-8 offset-sm-2">
				<img class="img-fluid" src="<?=base_url($page->image)?>">
			</div>
			<h5 class="card-title"><?=$page->tanggal_event?></h5>
			<p class="card-text"><?=$page->isi_post?></p>
			<p class="card-text"><small class="text-muted">diposting pada <?=$page->tanggal_post?></small></p>
		  </div>
		</div>
	</div>
  </div>
</div>
