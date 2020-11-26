<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Jasa Joki</title>
</head>

<body>
    <header>
        <h3>Customer yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftarjoki.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Rank</th>
            <th>Hero Fav</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM listjoki";
        $query = mysqli_query($db, $sql);

        while($joki = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$joki['id']."</td>";
            echo "<td>".$joki['nama']."</td>";
            echo "<td>".$joki['alamat']."</td>";
            echo "<td>".$joki['jenis_kelamin']."</td>";
            echo "<td>".$joki['rank']."</td>";
            echo "<td>".$joki['hero_fav']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$joki['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$joki['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>