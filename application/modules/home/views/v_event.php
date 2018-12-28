  <!-- Timeline Permib -->

      <section class="intro" style="padding-top: 150px;">
      	<div class="cont-tl">
      		<h1> Timeline Permib &darr; </h1>
      	</div>
      </section>

      <section class="timeline">
      	<ul>
			<?php foreach($event as $row){?>
			<li>
      			<div>
      				<time><?=$row->tanggal_event?> </time>  
					<h1><?=$row->judul_post?></h1>
						 <?= cut_text($row->isi_post);?>
					<a href="<?=base_url('event/').$row->slug_post?>" class="btn btn-primary">Readmore</a>
      			</div>
      		</li>
			<?php } ?>
      	</ul>
      	
      </section>

      <!-- Batas Timeline -->