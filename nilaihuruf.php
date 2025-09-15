<!-- grade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Grade Nilai</title>
</head>
<body>
    <form method="post">
        Masukkan nilai (0-100): <input type="number" name="nilai" min="0" max="100" required>
        <input type="submit" value="Cek Grade">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];
        if ($nilai >= 85) {
            $grade = "A";
        } elseif ($nilai >= 70) {
            $grade = "B";
        } elseif ($nilai >= 55) {
            $grade = "C";
        } elseif ($nilai >= 40) {
            $grade = "D";
        } else {
            $grade = "E";
        }
        echo "Nilai Anda: $nilai, Grade: $grade";
    }
    ?>
</body>
</html>