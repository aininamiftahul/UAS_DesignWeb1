<?php
include "koneksi.php";

// if (isset($_SESSION["user"])) {
//     header(location: login.php);
//     exit();
// }

$survey_penduduk= query("SELECT*FROM data_individu");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Data Individu</title>
        <link rel="stylesheet" href="styleadmin.css">
    </head>
    <body>
        <section id="menu">
            <div class="logo">
                <img src="image/dukcapil.svg" alt="">
            </div>
            <div class="items">
                <li>
                    <a href="admin_dk.php">Data Keluarga</a>
                </li>
                <li>
                    <a href="admin_di.php">Data Individu</a>
                </li>
                <li>
                    <a href="admin_dot.php">Data Orang Tua</a>
                </li>
            </div>
        </section>
        <section id="interface">
            <div class="navigation">
                <div class="search">
                    <i class="far fa-bell"></i>
                    <input type="text" placeholder="search">
                </div>
            </div>
            <section id="table">
                <div class="datakeluarga">
                    <table border="1" cellpadding="10" cellspacing="0">
                        <tr>
                            <th style="width: 2%;">Id</th>
                            <th style="width: 10%;">Nama Lengkap</th>
                            <th style="width: 10%;">No Kartu Keluarga</th>
                            <th style="width: 10%;">No Paspor</th>
                            <th style="width: 10%;">Jenis Kelamin</th>
                            <th style="width: 10%;">Tempat Lahir</th>
                            <th style="width: 10%;">Tanggal Lahir</th>
                            <th style="width: 2%;">Umur</th>
                            <th style="width: 10%;">No Akta</th>
                            <th style="width: 2%;">Golongan Darah</th>
                            <th style="width: 5%;">Agama</th>
                            <th style="width: 5%;">Status</th>
                            <th style="width: 10%;">Pendidikan Terakhir</th>
                            <th style="width: 8%">Aksi</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($survey_penduduk as $row) : ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $i ?></td>
                            <td><?php echo $row["Namadi"]; ?></td>
                            <td style="text-align: center;"><?php echo $row["Nokk"];?></td>
                            <td style="text-align: center;"><?php echo $row["Paspordi"];?></td>
                            <td style="text-align: center;"><?php echo $row["Jeniskelamindi"];?></td>
                            <td style="text-align: center;"><?php echo $row["Tempatlahirdi"];?></td>
                            <td style="text-align: center;"><?php echo $row["Tanggaldi"];?></td>
                            <td style="text-align: center;"><?php echo $row["Umurdi"];?></td>
                            <td style="text-align: center;"><?php echo $row["Noaktadi"];?></td>
                            <td style="text-align: center;"><?php echo $row["Goldardi"];?></td>
                            <td style="text-align: center;"><?php echo $row["Agamadi"];?></td>
                            <td style="text-align: center;"><?php echo $row["Statusdi"];?></td>
                            <td style="text-align: center;"><?php echo $row["Pendidikandi"];?></td>
                            <td>
                                <a href="#" id="">Edit</a>
                                <a href="#" id="" onclick="return confirm('yakin?');">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach ?>
                    </table>
                </div>
            </section>
        </section>
    </body>
</html>
