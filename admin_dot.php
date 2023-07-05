<?php
include "koneksi.php";

// if (isset($_SESSION["user"])) {
//     header(location: login.php);
//     exit();
// }

$survey_penduduk= query("SELECT*FROM data_orangtua");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Data Orang Tua</title>
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
                            <th style="width: 8%;">Id</th>
                            <th style="width: 25%;">Nama Ibu</th>
                            <th style="width: 20%;">NIK Ibu</th>
                            <th style="width: 25%;">Nama Ayah</th>
                            <th style="width: 20%;">NIK Ayah</th>
                            <th style="width: 8%">Aksi</th>
                        </tr>
                        <!-- <?php $i = 1; ?>
                        <?php foreach ($survey_penduduk as $row) : ?> -->
                        <tr>
                        <td style="text-align: center;"><?php echo $i ?></td>
                            <td><?php echo $row["Namaibu"]; ?></td>
                            <td style="text-align: center;"><?php echo $row["Namaibu"];?></td>
                            <td style="text-align: center;"><?php echo $row["Nikibu"];?></td>
                            <td style="text-align: center;"><?php echo $row["Namaayah"];?></td>
                            <td style="text-align: center;"><?php echo $row["Nikayah"];?></td>
                            <td>
                                <a href="#" id="">Edit</a>
                                <a href="#" id="" onclick="return confirm('yakin?');">Delete</a>
                            </td>
                        </tr>
                        <!-- <?php $i++; ?>
                        <?php endforeach ?> -->
                    </table>
                </div>
            </section>
        </section>
    </body>
</html>
