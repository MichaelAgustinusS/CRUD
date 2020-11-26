<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Jasa Joki</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Joki</h3>
        <h1>JASA JOKI</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftarjoki.php">Daftar Baru</a></li>
            <li><a href="list-joki.php">Pendaftar</a></li>
        </ul>
    </nav>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran joki berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>