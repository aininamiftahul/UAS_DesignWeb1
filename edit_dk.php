<?php
require "koneksi.php";

$id = $_GET["id"];

$data = query("SELECT * FROM data_keluarga WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    if (edit_dk($_POST) > 0) {
        echo "
        <script>
        alert('Berhasil Diubah');
        document.location.href='indeks.php';
        </script>
        ";
    } else {
        "Gagal diubah";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="datakeluarga">
    <form action="" method="POST">
                        <h5> I. Data Keluarga</h5>
                        <label for="namakk" class="form-label">Nama Kepala Keluarga</label>
                        <input name="Namakk"
                            type="text"
                            class="form-control"
                            id="namakk"
                            aria-describedby="namakk"
                            required value="<?=$data["Namakk"];?>"/>
                        >
                        <label for="alamatdi" class="form-label">Alamat Sebelumnya</label>
                        <input name="Alamatdi"
                            type="text"
                            class="form-control"
                            id="alamatdi"
                            aria-describedby="alamatdi"
                            required value="<?=$data["Alamatdi"];?>"/>
                        >
                        <label for="alamat" class="form-label">Alamat Keluarga</label>
                        <input name="Alamat"
                            type="text"
                            class="form-control"
                            id="alamat"
                            aria-describedby="alamat"
                            required value="<?=$data["Alamat"];?>"/>
                        >
                        <label for="pos" class="form-label">Kode Pos</label>
                        <input name="Pos"
                            type="text"
                            class="form-control"
                            id="pos"
                            aria-describedby="pos"
                            required value="<?=$data["Pos"];?>"/>
                        >
                        <button name="submit" type="submit" value="submit" class="btn btn-warning" style="margin: auto;">Submit</button>
                        </form>
    </div>
</body>
</html>