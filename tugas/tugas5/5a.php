<?php
$mahasiswa = [
    [
        "nama" => "Alam",
        "nrp" => "243040080",
        "email" => "aaallaaamm03@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Muhamad Nur Salam",
        "nrp" => "243040083",
        "email" => "muhamad@gmail.com",
        "jurusan" => "Teknologi Pangan"
    ],
    [
        "nama" => "Afsal Prima Maula",
        "nrp" => "243040085",
        "email" => "afsalprima@gmail.com",
        "jurusan" => "Teknik Elektro"
    ],
    [
        "nama" => "Billy Wicaksono",
        "nrp" => "243040090",
        "email" => "bilker@gmail.com",
        "jurusan" => "Teknologi Pangan"
    ],
    [
        "nama" => "Ghrisvy Tausyah",
        "nrp" => "243040091",
        "email" => "wibugris@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Muhammad Fathur Rahman",
        "nrp" => "243040094",
        "email" => "phatur@gmail.com",
        "jurusan" => "Teknik Mesin"
    ],
    [
        "nama" => "M. Ali Junior",
        "nrp" => "243040095",
        "email" => "alijunior@gmail.com",
        "jurusan" => "Teknik Industri"
    ],
    [
        "nama" => "Mark Zuckerberg",
        "nrp" => "243040098",
        "email" => "markzuckerberg@gmail.com",
        "jurusan" => "Sains Komputer dan Psikologi"
    ],
    [
        "nama" => "Sundar Pichai",
        "nrp" => "243040060",
        "email" => "sundarpichai@gmail.com",
        "jurusan" => "Teknik Metalurgi"
    ],
    [
        "nama" => "Jensen Huang",
        "nrp" => "243040001",
        "email" => "jensenhuang@gmail.com",
        "jurusan" => "Teknik Elektro"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NRP: <?= $mhs["nrp"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>