    <table id="table_id" class="table table-striped table-bordered" width="100%" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Image</th>
        <th>Tanggal</th>
        <th>Terakhir Update</th>
        <th>Aksi</th>
      </tr>
      <?php $no = 1;
          foreach ($page as $row) {  ?>
      <tr>
        <td><?=$no++?></td>
        <td><?=$row->judul_post?></td>
        <td><img class="img-fluid" src="<?=base_url($row->image)?>" height="100px" width="100px" alt=""></td>
        <td><?=$row->tanggal_post?></td>
        <td><?=$row->tanggal?></td>
        <td><a href="<?=base_url('page/detail_page/'.$row->slug_post)?>">Detail</a>  <a href="http://localhost/projectpermib/page/edit/<?=$row->slug_post?>">Edit</a> <a href="http://localhost/projectpermib/page/detail_page/<?=$row->slug_post?>">Delete</a> </td>

      </tr>
    <?php } ?>
    </table>

    <a href="<?=base_url('page/add')?>">Posting..</a>
