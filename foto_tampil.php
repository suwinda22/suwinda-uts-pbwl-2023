<?php

$foto = new App\Foto;
$rows = $foto->tampil();

?>

<h2>Data Galeri Foto</h2>

<a href="index.php?hal=foto_input" class="btn">Tambah Foto</a>

<table>
    <tr>
    <tr>
        <th>ID</th>
        <th>ID POST</th>
        <th>JUDUL</th>
        <th>FILE</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    </tr>
    <?php foreach ($rows as $row) { ?>
        <tr>
        <td><?php echo $row['photo_id']; ?></td>
        <td><?php echo $row['photo_id_post']; ?></td>
        <td><?php echo $row['photo_title']; ?></td>
        <td><?php echo $row['photo_file']; ?></td>
        <td><a href="index.php?hal=foto_edit&id=<?php echo $row['photo_id']; ?>" class="btn" >Edit</a></td>
        <td><a href="index.php?hal=foto_delete&id=<?php echo $row['photo_id']; ?>" class="btn" >Delete</a></td>
    </tr>
    <?php } ?>
</table>
