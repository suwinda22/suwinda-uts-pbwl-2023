<h2>Tambah Post</h2>

<form action="post_proses.php" method="post">
    <table>
    <tr>
            <td>ID KATEGORI</td>
            <td><input type="text" name="post_id_cat"></td>
        </tr>

        <tr>
            <td>SLUG</td>
            <td><input type="text" name="post_slug"></td>
        </tr>

        <tr>
            <td>JUDUL</td>
            <td><input type="text" name="post_title"></td>
        </tr>
    
        <tr>
            <td>KETERANGAN</td>
            <td><input type="text" name="post_text"></td>
        </tr>
    
        <tr>
            <td>TANGGAL</td>
            <td><input type="date" name="post_date"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>