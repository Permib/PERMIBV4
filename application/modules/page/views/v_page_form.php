  <?php
  // Error
  if(isset($error)) {
  	echo '<div class="alert alert-warning">';
  	echo $error;
  	echo '</div>';
  }

  // Validasi
  echo validation_errors('<div class="alert alert-success">','</div>');

  // Form
  echo form_open_multipart('');
  ?>

<div class="container py-5">
  <div class="row">
    <div class="col-md-8">
      <div class="form-group form-group-lg">
        <label class="control-label font-weight-bold">JUDUL</label>	
        <input type="text" name="judul" placeholder="Nama berita" value="<?php if(isset($page->judul_post)){echo $page->judul_post;} ?>" required class="form-control">
		<?php if(form_error('judul') != FALSE){
			echo '<p class="text-danger">*'.form_error("judul").'</p>';
		} ?>
      </div>
		<div class="form-group">
		  <label class="control-label font-weight-bold">GAMBAR THUMBNAIL</label><br>
		  <input type="file" id="imgInp" name="image">
			<?php if(form_error('gambar') != FALSE){
				echo '<p class="text-danger">*'.form_error("gambar").'</p>';
			} ?>
		</div>
		<img id="blah" src="<?php if(isset($page->image)) echo base_url($page->image);?>" class="img-fluid"/>
		
		<div class="form-group">
		  <label class="control-label font-weight-bold">TANGGAL ACARA</label>
		  <input type="date" name="tanggal_event" value="<?php if(isset($page->tanggal_event)){echo $page->tanggal_event;}?>" class="form-control">
			<?php if(form_error('tanggal_event') != FALSE){
				echo '<p class="text-danger">*'.form_error("tanggal_event").'</p>';
			}?>
		 </div>

		<div class="form-group">
		  <label class="control-label font-weight-bold">ISI POST</label>
		  <textarea rows="100" cols="50" name="isi" class="form-control" placeholder="Keterangan" id="keterangan"><?php  if(isset($page->judul_post)){echo $page->isi_post;}?></textarea>
			<?php if(form_error('isi') != FALSE){
				echo '<p class="text-danger">*'.form_error('isi').'</p>';
			}?>
		</div>

		<div class="form-group">
		  <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary">
		  <input type="reset" name="reset" value="Reset" class="btn btn-default">
		</div>
	

    </div>
  </div>
</div>

  <?php echo form_close() ?>

  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nfqrx1rnrng76u9ardv32o9akavsaw05edid61v8ku0cdyk3  "></script>
  <script type="text/javascript">
  tinymce.init({
    file_browser_callback: function(field, url, type, win) {
      tinyMCE.activeEditor.windowManager.open({
        file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
        title: 'KCFinder',
        width: 700,
        height: 500,
        inline: true,
        close_previous: false
      }, {
        window: win,
        input: field
      });
      return false;
    },
    selector: "#keterangan",
    height: 150,
    plugins: [
      "advlist autolink lists link image charmap print preview anchor",
      "searchreplace visualblocks code fullscreen",
      "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
  });
  </script>
