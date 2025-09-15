<!-- kalkulator.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <form method="post">
        Angka 1: <input type="number" name="angka1" required><br>
        Angka 2: <input type="number" name="angka2" required><br>
        Operator:
        <select name="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['angka1'];
        $b = $_POST['angka2'];
        $op = $_POST['operator'];
        $hasil = 0;

        switch ($op) {
            case "tambah":
                $hasil = $a + $b;
                break;
            case "kurang":
                $hasil = $a - $b;
                break;
            case "kali":
                $hasil = $a * $b;
                break;
            case "bagi":
                $hasil = $b != 0 ? $a / $b : "Tidak bisa dibagi nol";
                break;
        }
        echo "Hasil: $hasil";
    }
    ?>
</body>
</html>