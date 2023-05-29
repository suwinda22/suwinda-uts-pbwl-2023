<?php

$post = new App\Post;
$rows = $post->tampil();

?>

<h2> Data Post</h2>

<a href="index.php?hal=post_input" class="btn">Tambah Post</a>

<table>
    <tr>
        <th>ID</th>
        <th>ID KATEGORI</th>
        <th>SLUG</th>
        <th>JUDUL</th>
        <th>KETERANGAN</th>
        <th>TANGGAL</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['post_id']; ?></td>
        <td><?php echo $row['post_id_cat']; ?></td>
        <td><?php echo $row['post_slug']; ?></td>
        <td><?php echo $row['post_title']; ?></td>
        <td><?php echo $row['post_text']; ?></td>
        <td><?php echo $row['post_date']; ?></td>
        <td><a href="index.php?hal=post_edit&id=<?php echo $row['post_id']; ?>" class="btn" >Edit</a></td>
        <td><a href="index.php?hal=post_delete&id=<?php echo $row['post_id']; ?>" class="btn" >Delete</a></td>
    </tr>
    <?php } ?>
</table>
