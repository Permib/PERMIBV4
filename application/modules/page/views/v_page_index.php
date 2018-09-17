<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border=1px;>
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
        <td><?=$row->image?></td>
        <td><?=$row->tanggal_post?></td>
        <td><?=$row->tanggal?></td>
        <td><a href="http://localhost/projectpermib/page/detail_page/<?=$row->id_post?>">Detail</a>  <a href="http://localhost/projectpermib/page/edit/<?=$row->id_post?>">Edit</a> <a href="http://localhost/projectpermib/page/detail_page/<?=$row->id_post?>">Delete</a> </td>

      </tr>
    <?php } ?>
    </table>
    <a href="http://localhost/projectpermib/page/add">Posting..</a>
  </body>
</html>
