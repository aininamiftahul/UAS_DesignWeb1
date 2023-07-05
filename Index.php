<?php
include "koneksi.php";

if (isset($_POST["submit"])) {

    if (submit($_POST) > 0) {
        echo "
        <script>
        alert('Submit Berhasil');
        document.location.href='index.php';
        </script>
        ";
    } else {
        "Gagal";
    }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Desain Web Sensus Penduduk</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
            crossorigin="anonymous"
        >
    </head>
    <body style="background-color: whitesmoke">
        <div class="header" style="display: flex;">
            <img src="image/dukcapil.svg" style="width: 100px; margin: 20px 70px;">
            <h3 style="text-align: left; color: #e68c3a; margin: 40px -50px;">FORMULIR SENSUS PENDUDUK WARGA NEGARA INDONESIA 2023</h3>
        </div>
        <div class="container" style="background-color: whitesmoke; margin: 0px 50px;">
            <div class="outer">
                <form method="POST" action="">
                    <div class="datakeluarga">
                        <h5> I. Data Keluarga</h5>
                        <label for="namakk" class="form-label">Nama Kepala Keluarga</label>
                        <input name="Namakk"
                            type="text"
                            class="form-control"
                            id="namakk"
                            aria-describedby="namakk"
                        >
                        <label for="alamatdi" class="form-label">Alamat Sebelumnya</label>
                        <input name="Alamatdi"
                            type="text"
                            class="form-control"
                            id="alamatdi"
                            aria-describedby="alamatdi"
                        >
                        <label for="alamat" class="form-label">Alamat Keluarga</label>
                        <input name="Alamat"
                            type="text"
                            class="form-control"
                            id="alamat"
                            aria-describedby="alamat"
                        >
                        <label for="pos" class="form-label">Kode Pos</label>
                        <input name="Pos"
                            type="text"
                            class="form-control"
                            id="pos"
                            aria-describedby="pos"
                        >
                    </div>
                    <div class="dataindividu" style="margin-bottom: 10px;">
                        <h5>II. Data Individu</h5>
                        <label for="namadi" class="form-label">Nama Lengkap</label>
                        <input name="Namadi"
                            type="text"
                            class="form-control"
                            id="inputnamadi"
                            aria-describedby="namadi"
                        >
                        <label for="nokk" class="form-label">No Kartu Keluarga</label>
                        <input name="Nokk"
                            type="text"
                            class="form-control"
                            id="inputnokk"
                            aria-describedby="nokk"
                        >
                        <label for="paspordi" class="form-label">No Paspor</label>
                        <input name="Paspordi"
                            type="text"
                            class="form-control"
                            id="paspordi"
                            aria-describedby="paspordi"
                        >
                        <label for="jeniskelamindi" class="form-label">Jenis Kelamin</label>
                        <select name="Jeniskelamindi" class="form-select" aria-label="jeniskelamindi">
                            <option value="0"selected>Pilih</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                        <label for="tempatlahirdi" class="form-label">Tempat Lahir</label>
                        <input name="Tempatlahirdi"
                            type="text"
                            class="form-control"
                            id="tempatlahirdi"
                            aria-describedby="tempatlahirdi"
                        >
                        <label for="tanggaldi" class="form-label">Tanggal Lahir</label>
                        <input name="Tanggaldi"
                            type="date"
                            class="form-control"
                            id="tanggldi"
                            aria-describedby="tanggaldi"
                        >
                        <label for="umurdi" class="form-label">Umur</label>
                        <input name="Umurdi"
                            type="text"
                            class="form-control"
                            id="umurdi"
                            aria-describedby="umurdi"
                        >
                        <label for="noaktadi" class="form-label">No Akta Kelahiran/Surat Kenal Lahir</label>
                        <input name="Noaktadi"
                            type="text"
                            class="form-control"
                            id="noaktadi"
                            aria-describedby="noaktadi"
                        >
                        <label for="goldardi" class="form-label">Golongan Darah</label>
                        <select name="Goldardi"class="form-select" aria-label="goldardi">
                            <option value="0" selected>Pilih</option>
                            <option value="1">A</option>
                            <option value="2">A-</option>
                            <option value="3">A+</option>
                            <option value="4">B</option>
                            <option value="5">B-</option>
                            <option value="6">B+</option>
                            <option value="7">AB</option>
                            <option value="8">AB+</option>
                            <option value="9">AB-</option>
                            <option value="10">O</option>
                            <option value="11">O-</option>
                            <option value="12">Tidak Tahu</option>
                        </select>
                        <label for="agamadi" class="form-label">Agama / Kepercayaan</label>
                        <select name="Agamadi" class="form-select" aria-label="agamadi">
                            <option value="0" selected>Pilih</option>
                            <option value="1">Islam</option>
                            <option value="2">Kristen</option>
                            <option value="3">Katholik</option>
                            <option value="4">Hindu</option>
                            <option value="5">Budha</option>
                            <option value="6">Khong Huchu</option>
                        </select>
                        <label for="statusdi" class="form-label">Status / Hubungan Dalam Keluarga</label>
                        <select name="Statusdi" class="form-select" aria-label="statusdi">
                            <option value="0" selected>Pilih</option>
                            <option value="1">Suami</option>
                            <option value="2">Istri</option>
                            <option value="3">Anak</option>
                        </select>
                        <label for="pendidikandi" class="form-label">Pendidikan Terakhir</label>
                        <select name="Pendidikandi" class="form-select" aria-label="pendidikandi">
                            <option value="0" selected>Pilih</option>
                            <option value="1">Tidak/Belum Sekolah</option>
                            <option value="2">Tidak Tamat SD/Sederajat</option>
                            <option value="3">SLTP/Sederajat</option>
                            <option value="4">SLTA/Sederajat</option>
                            <option value="5">Diploma I/II</option>
                            <option value="6">Akademi/Diploma III/S.Muda</option>
                            <option value="7">Diploma IV/Strata I</option>
                            <option value="8">Strata II</option>
                            <option value="9">Strata III</option>
                        </select>
                    </div>
                    <div class="dataorangtua">
                        <h5>III. Data Orang Tua</h5>
                        <label for="namaibu" class="form-label">Nama Lengkap Ibu</label>
                        <input name="Namaibu"
                            type="text"
                            class="form-control"
                            id="inputnamaibu"
                            aria-describedby="namaibu"
                        >
                        <label for="nikibu" class="form-label">NIK Ibu</label>
                        <input name="Nikibu"
                            type="text"
                            class="form-control"
                            id="nikibu"
                            aria-describedby="nikibu"
                        >
                        <label for="namaayah" class="form-label">Nama Lengkap Ayah</label>
                        <input name="Namaayah"
                            type="text"
                            class="form-control"
                            id="namaayah"
                            aria-describedby="namaayah"
                        >
                        <label for="nikayah" class="form-label">NIK Ayah</label>
                        <input name="Nikayah"
                            type="text"
                            class="form-control"
                            id="nikayah"
                            aria-describedby="nikayah"
                        >
                    </form>
                    <div class="form-check">
                        <input 
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault"
                        >
                        <label class="form-check-label" for="flexCheckDefault">
                            Demikian formulir ini saya isi dengan sesungguhnya apabila keterangan tidak sesuai
                        dengan keadaan sebenarnya, saya bersedia dikenakan sanksi sesuai ketentuan perundang-undangan yang
                        berlaku
                        </label>
                    </div>
                    <button name="submit" type="submit" value="submit" class="btn btn-warning" style="margin: auto;">Submit</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
</html>
