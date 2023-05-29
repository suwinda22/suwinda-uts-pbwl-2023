<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Foto extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_photos";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $photo_id_post = $_POST['photo_id_post'];
        $photo_title = $_POST['photo_title'];
        $photo_file = $_POST['photo_file'];

        $sql = "INSERT INTO tb_photos (photo_id_post, photo_title, photo_file) VALUES (:photo_id_post, :photo_title, :photo_file)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":photo_id_post", $photo_id_post);
        $stmt->bindParam(":photo_title", $photo_title);
        $stmt->bindParam(":photo_file", $photo_file);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_photos WHERE photo_id=:photo_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":photo_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $photo_id_post = $_POST['photo_id_post'];
        $photo_title = $_POST['photo_title'];
        $photo_file = $_POST['photo_file'];
        $photo_id = $_POST['photo_id'];

        $sql = "UPDATE tb_photos SET photo_id_post=:photo_id_post, photo_title=:photo_title, photo_file=:photo_file WHERE photo_id=:photo_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":photo_id_post", $photo_id_post);
        $stmt->bindParam(":photo_title", $photo_title);
        $stmt->bindParam(":photo_file", $photo_file);
        $stmt->bindParam(":photo_id", $photo_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_photos WHERE photo_id=:photo_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":photo_id", $id);
        $stmt->execute();

    }

}