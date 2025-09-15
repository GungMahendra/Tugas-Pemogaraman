<!-- ucapan.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Ucapan</title>
</head>
<body>
    <form method="post">
        Nama: <input type="text" name="nama" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        echo "Halo, $nama selamat belajar PHP!";
    }
    ?>
</body>
</html>