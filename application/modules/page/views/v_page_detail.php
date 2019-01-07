
			<!-- Content goes here -->

			<section class="body-klik-event">

				<div class="sekat-head"> </div>

				<!-- Konten dari Event -->
				<div class="back-event">
					
					<div class="circle-judul">
						
						<h1> <?=$page->judul_post?> </h1>

					</div>

					<div class="text-pict">

						<div class="container">
							<div class="row">
								<!-- pict -->
							  <?php if(isset($page->image) && $page->image != NULL){ ?>
								  <div class="col-sm-5 pict"> <img class="img-fluid" src="<?=base_url($page->image)?>"> </div>
							  <?php }?>

							  <!-- text -->
							  
							  <div class="col-sm-7"> 
							  <p><?=$page->isi_post?>
							  		<br>


									
									</p>
								<h5 class="card-title"><?=$page->tanggal_event?></h5>
								<p class="card-text"><small class="text-muted">diposting pada <?=$page->tanggal_post?></small></p>							  
							  </div>
							</div>
						</div>


						
					</div>

				</div>

				<div style="clear: both;"></div>
				
			</section>

			<div style="margin-top: -60px;"></div>