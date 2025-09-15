<!-- biodata.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Biodata Singkat</title>
</head>
<body>
    <form method="post">
        Nama: <input type="text" name="nama" required><br>
        Umur: <input type="number" name="umur" required><br>
        Jenis Kelamin:
        <select name="jk">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        Alamat: <input type="text" name="alamat" required><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];

        echo "Halo, nama saya $nama. Umur saya $umur tahun. ";
        echo "Saya seorang $jk. Saya tinggal di $alamat.";
    }
    ?>
</body>
</html>