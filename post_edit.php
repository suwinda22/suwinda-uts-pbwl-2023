<?php

$id = $_GET['id'];
$post = new App\Post();

$row = $post->edit($id);
?>

<h2>Edit Post</h2>

<form action="post_proses.php" method="post">
    <input type="hidden" name="post_id" value="<?php echo $row['post_id']; ?>">
    <table>
    <tr>
            <td>ID KATEGORI</td>
            <td><input type="text" name="post_id_cat" value="<?php echo $row['post_id_cat']; ?>"></td>
        </tr>

        <tr>
            <td>SLUG</td>
            <td><input type="text" name="post_slug" value="<?php echo $row['post_slug']; ?>"></td>
        </tr>

        <tr>
            <td>JUDUL</td>
            <td><input type="text" name="post_title" value="<?php echo $row['post_title']; ?>"></td>
        </tr>

        <tr>
            <td>KETERANGAN</td>
            <td><input type="text" name="post_text" value="<?php echo $row['post_text']; ?>"></td>
        </tr>

        <tr>
            <td>TANGGAL</td>
            <td><input type="date" name="post_date" value="<?php echo $row['post_date']; ?>"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>