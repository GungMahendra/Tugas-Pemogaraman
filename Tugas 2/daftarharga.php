<!-- daftar_harga.php -->
<?php
$harga = [
    "Nasi Goreng" => 20000,
    "Mie Ayam" => 15000,
    "Soto Ayam" => 18000,
    "Bakso" => 22000,
    "Ayam Geprek" => 25000
];

echo "<h3>Daftar Harga Barang:</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama Barang</th><th>Harga (Rp)</th></tr>";

foreach ($harga as $barang => $h) {
    echo "<tr><td align='left'>$barang</td><td align='right'>" . number_format($h, 0, ',', '.') . "</td></tr>";
}

echo "</table>";
?>
