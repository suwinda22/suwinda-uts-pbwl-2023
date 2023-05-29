<?php

$id = $_GET['id'];
$foto = new App\Foto();

$row = $foto->edit($id);
?>

<h2>Edit Data Foto</h2>

<form action="foto_proses.php" method="post">
    <input type="hidden" name="photo_id" value="<?php echo $row['photo_id']; ?>">
    <table>
    <tr>
            <td>ID POST</td>
            <td><input type="text" name="photo_id_post" value="<?php echo $row['photo_id_post']; ?>"></td>
        </tr>

        <tr>
            <td>JUDUL</td>
            <td><input type="text" name="photo_title" value="<?php echo $row['photo_title']; ?>"></td>
        </tr>

        <tr>
            <td>FILE</td>
            <td><input type="text" name="photo_file" value="<?php echo $row['photo_file']; ?>"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>