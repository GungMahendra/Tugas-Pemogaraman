<!-- bilangan_genap.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Bilangan Genap</title>
</head>
<body>
    <h3>Menampilkan Bilangan Genap</h3>
    <form method="post">
        Nilai n1: <input type="number" name="n1" required>
        Nilai n2: <input type="number" name="n2" required>
        <input type="submit" value="Tampilkan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        if ($n1 < $n2) {
            echo "<p>Bilangan genap dari $n1 sampai $n2:</p>";
            for ($i = $n1; $i <= $n2; $i++) {
                if ($i % 2 == 0) {
                    echo $i . " ";
                }
            }
        } else {
            echo "<p style='color:red;'>Syarat tidak terpenuhi: n1 harus lebih kecil dari n2!</p>";
        }
    }
    ?>
</body>
</html>
