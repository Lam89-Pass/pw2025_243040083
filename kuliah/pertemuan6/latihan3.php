<?php
$mahasiswa = [
    ['Alam', '243040083', 'aaallaaamm03@gmail.com', 'Teknik Informatika'],
    ['Ali', '243040099', 'alijamak@gmail.com', 'Teknik Pangan', [85, 100, 40]]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bersarang</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama:<?= $m[0]; ?></li>
            <li>NIM:<?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan:<?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>

//Pelajari array asosiatif