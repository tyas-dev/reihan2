<!DOCTYPE html>
<html>
<head>
    <title>Formulir Data Mahasiswa</title>
</head>
<body>
    <h2>Formulir Data Mahasiswa</h2>
    <form action="index.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas" required><br><br>

        <label for="matkul">Mata Kuliah:</label><br>
        <input type="text" id="matkul" name="matkul" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $matkul = $_POST['matkul'];

        echo "<h3>Data Mahasiswa:</h3>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Kelas: " . htmlspecialchars($kelas) . "<br>";
        echo "Mata Kuliah: " . htmlspecialchars($matkul) . "<br>";
    }
    ?>
</body>
</html>
