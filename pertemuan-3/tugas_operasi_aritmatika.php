<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Operasi Aritmatika</title>
</head>
<body>

<h2>Operasi Aritmatika</h2>
<form method="post">
    <label for="angka1">Angka Pertama:</label><br>
    <input type="number" id="angka1" name="angka1" required><br><br>
    
    <label for="angka2">Angka Kedua:</label><br>
    <input type="number" id="angka2" name="angka2" required><br><br>
    
    <label for="operasi">Operasi:</label><br>
    <select id="operasi" name="operasi" required>
        <option value="tambah">Tambah</option>
        <option value="kurang">Kurang</option>
        <option value="kali">Kali</option>
        <option value="bagi">Bagi</option>
    </select><br><br>
    
    <input type="submit" value="Hitung">
</form>

<?php
// Function untuk melakukan operasi aritmatika
function hitungAritmatika($angka1, $angka2, $operasi) {
    switch ($operasi) {
        case 'tambah':
            return $angka1 + $angka2;
        case 'kurang':
            return $angka1 - $angka2;
        case 'kali':
            return $angka1 * $angka2;
        case 'bagi':
            if ($angka2 != 0) {
                return $angka1 / $angka2;
            } else {
                return "Pembagian dengan nol tidak diperbolehkan.";
            }
        default:
            return "Operasi tidak dikenal.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operasi = $_POST['operasi'];
    $hasil = hitungAritmatika($angka1, $angka2, $operasi);
    
    echo "<h3>Hasil:</h3>";
    echo "<p>Angka Pertama: $angka1</p>";
    echo "<p>Angka Kedua: $angka2</p>";
    echo "<p>Operasi: $operasi</p>";
    echo "<p>Hasil: $hasil</p>";
}
?>

</body>
</html>
