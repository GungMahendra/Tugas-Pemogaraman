<!-- menu.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Menu Makanan</title>
</head>
<body>
    <form method="post">
        Pilih Menu:
        <select name="menu">
            <option value="nasigoreng">Nasi Goreng</option>
            <option value="soto">Soto</option>
            <option value="mieayam">Mie Ayam</option>
        </select>
        <input type="submit" value="Lihat Harga">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $menu = $_POST['menu'];
        switch ($menu) {
            case "nasigoreng":
                $harga = 20000;
                break;
            case "soto":
                $harga = 15000;
                break;
            case "mieayam":
                $harga = 12000;
                break;
            default:
                $harga = 0;
        }
        echo "Harga " . ucfirst($menu) . " adalah Rp " . number_format($harga, 0, ',', '.');
    }
    ?>
</body>
</html>