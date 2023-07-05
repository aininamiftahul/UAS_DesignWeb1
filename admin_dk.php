<?php
include "koneksi.php";

// if (isset($_SESSION["user"])) {
//     header(location: login.php);
//     exit();
// }

$survey_penduduk= query("SELECT * FROM data_keluarga");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Data Keluarga</title>
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
                            <th style="width: 10%;">Id</th>
                            <th style="width: 25%;">Nama Kepala Keluarga</th>
                            <th style="width: 25%;">Alamat Sebelumnya</th>
                            <th style="width: 25%;">Alamat Keluarga</th>
                            <th style="width: 10%;">Kode Pos</th>
                            <th style="width: 10%">Aksi</th>
                        </tr>
                        
                        <?php $i = 1; ?>
                        <?php foreach ($survey_penduduk as $row) : ?>
                        <tr>
                        <td style="text-align: center;"><?php echo $i ?></td>
                            <td><?php echo $row["Namakk"]; ?></td>
                            <td style="text-align: center;"><?php echo $row["Alamatdi"];?></td>
                            <td style="text-align: center;"><?php echo $row["Alamat"];?></td>
                            <td style="text-align: center;"><?php echo $row["Pos"];?></td>
                            <td>
                                <a href="edit_dk.php?id=<?php echo $row["id_di"]; ?>">Edit</a>
                                <a href="delete_dk.php?id=<?php echo$row["id_di"]; ?>" onclick="return confirm('yakin?');">Delete</a>
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
