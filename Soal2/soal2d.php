<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil</title>
</head>
<body>
    <?php
    $nama = htmlspecialchars($_GET['nama']);
    $umur = htmlspecialchars($_GET['umur']);
    $hobi = htmlspecialchars($_GET['hobi']);

    echo "<h1>Data Anda</h1>";
    echo "Nama: $nama<br>";
    echo "Umur: $umur<br>";
    echo "Hobi: $hobi<br>";
    ?>
</body>
</html>
