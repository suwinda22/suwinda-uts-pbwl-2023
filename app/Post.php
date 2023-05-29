<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Post extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_post";
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
        $post_id_cat = $_POST['post_id_cat'];
        $post_slug = $_POST['post_slug'];
        $post_title = $_POST['post_title'];
        $post_text = $_POST['post_text'];
        $post_date = $_POST['post_date'];

        $sql = "INSERT INTO tb_post (post_id_cat, post_slug, post_title, post_text, post_date) VALUES (:post_id_cat, :post_slug, :post_title, :post_text, :post_date)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":post_id_cat", $post_id_cat);
        $stmt->bindParam(":post_slug", $post_slug);
        $stmt->bindParam(":post_title", $post_title);
        $stmt->bindParam(":post_text", $post_text);
        $stmt->bindParam(":post_date", $post_date);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_post WHERE post_id=:post_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":post_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $post_id_cat = $_POST['post_id_cat'];
        $post_slug = $_POST['post_slug'];
        $post_title = $_POST['post_title'];
        $post_text = $_POST['post_text'];
        $post_date = $_POST['post_date'];
        $post_id = $_POST['post_id'];

        $sql = "UPDATE tb_post SET post_id_cat=:post_id_cat, post_slug=:post_slug, post_title=:post_title, post_text=:post_text, post_date=:post_date WHERE post_id=:post_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":post_id_cat", $post_id_cat);
        $stmt->bindParam(":post_slug", $post_slug);
        $stmt->bindParam(":post_title", $post_title);
        $stmt->bindParam(":post_text", $post_text);
        $stmt->bindParam(":post_date", $post_date);
        $stmt->bindParam(":post_id", $post_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_post WHERE post_id=:post_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":post_id", $id);
        $stmt->execute();

    }

}