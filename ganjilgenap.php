<!-- ganjilgenap.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Ganjil atau Genap</title>
</head>
<body>
    <form method="post">
        Masukkan angka: <input type="number" name="angka" required>
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = $_POST['angka'];
        if ($angka % 2 == 0) {
            echo "$angka adalah bilangan Genap";
        } else {
            echo "$angka adalah bilangan Ganjil";
        }
    }
    ?>
</body>
</html>