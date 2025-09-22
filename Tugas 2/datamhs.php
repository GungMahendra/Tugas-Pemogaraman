<!-- mahasiswa_multidimensi.php -->
<?php
$mahasiswa = [
    ["nim" => "2201", "nama" => "Andi", "umur" => 20, "prodi" => "Informatika"],
    ["nim" => "2202", "nama" => "Budi", "umur" => 21, "prodi" => "Sistem Informasi"],
    ["nim" => "2203", "nama" => "Citra", "umur" => 19, "prodi" => "Teknik Komputer"],
    ["nim" => "2204", "nama" => "Dewi", "umur" => 22, "prodi" => "Informatika"],
    ["nim" => "2205", "nama" => "Eko", "umur" => 20, "prodi" => "Manajemen Informatika"],
    ["nim" => "2206", "nama" => "Fajar", "umur" => 21, "prodi" => "Informatika"],
    ["nim" => "2207", "nama" => "Gina", "umur" => 18, "prodi" => "Sistem Informasi"],
    ["nim" => "2208", "nama" => "Hari", "umur" => 19, "prodi" => "Teknik Komputer"],
    ["nim" => "2209", "nama" => "Indah", "umur" => 20, "prodi" => "Informatika"],
    ["nim" => "2210", "nama" => "Joko", "umur" => 21, "prodi" => "Sistem Informasi"],
];

echo "<h3>Data Mahasiswa</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>NIM</th><th>Nama</th><th>Umur</th><th>Program Studi</th></tr>";

foreach ($mahasiswa as $mhs) {
    echo "<tr>
            <td>{$mhs['nim']}</td>
            <td>{$mhs['nama']}</td>
            <td align='center'>{$mhs['umur']}</td>
            <td>{$mhs['prodi']}</td>
          </tr>";
}

echo "</table>";
?>
