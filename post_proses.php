<?php

require_once "inc/Koneksi.php";
require_once "app/Post.php";

$post = new App\Post();

if (isset($_POST['btn_simpan'])) {
    $post->simpan();
    header("location:index.php?hal=post_tampil");
}

if (isset($_POST['btn_update'])) {
    $post->update();
    header("location:index.php?hal=post_tampil");
}