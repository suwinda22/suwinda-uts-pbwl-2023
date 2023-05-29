<?php

$id = $_GET['id'];

$post = new App\Post();
$rows = $post->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=post_tampil">Kembali</a>
</div>