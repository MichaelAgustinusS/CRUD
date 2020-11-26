<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-joki.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM listjoki WHERE id=$id";
$query = mysqli_query($db, $sql);
$joki = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Jasa Joki</title>
</head>

<body>
    <header>
        <h3>Edit Daftar Joki</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $joki['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nickname" value="<?php echo $joki['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $joki['alamat'] ?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $joki['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="rank">Rank: </label>
            <?php $rank = $joki['rank']; ?>
            <select name="rank">
                <option <?php echo ($rank == 'Warrior') ? "selected": "" ?>>Warrior</option>
                <option <?php echo ($rank == 'Elite') ? "selected": "" ?>>Elite</option>
                <option <?php echo ($rank == 'Master') ? "selected": "" ?>>Master</option>
                <option <?php echo ($rank == 'Grandmaster') ? "selected": "" ?>>Grandmaster</option>
                <option <?php echo ($rank == 'Epic') ? "selected": "" ?>>Epic</option>
                <option <?php echo ($rank == 'Legend') ? "selected": "" ?>>Legend</option>
                <option <?php echo ($rank == 'Mythic') ? "selected": "" ?>>Mythic</option>
                <option <?php echo ($rank == 'Mythical Glory') ? "selected": "" ?>>Mythical Glory</option>
            </select>
        </p>
        <p>
            <label for="hero_fav">Hero Favorit: </label>
            <input type="text" name="hero_fav" placeholder="Hero Favorit" value="<?php echo $joki['hero_fav'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>