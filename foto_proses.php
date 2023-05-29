<?php

require_once "inc/Koneksi.php";
require_once "app/Foto.php";

$foto = new App\Foto();

if (isset($_POST['btn_simpan'])) {
    $foto->simpan();
    header("location:index.php?hal=foto_tampil");
}

if (isset($_POST['btn_update'])) {
    $foto->update();
    header("location:index.php?hal=foto_tampil");
}