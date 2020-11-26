<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Jasa Joki</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Joki</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nickname" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="rank">Rank: </label>
            <select name="rank">
                <option>Warrior</option>
                <option>Elite</option>
                <option>Master</option>
                <option>Grandmaster</option>
                <option>Epic</option>
                <option>Legend</option>
                <option>Mythic</option>
                <option>Mythical Glory</option>
            </select>
        </p>
        <p>
            <label for="hero_fav">Hero Favorit: </label>
            <input type="text" name="hero_fav" placeholder="Hero Favorit" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>