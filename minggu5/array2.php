<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stylearray2.css">
    <title></title>
</head>
<body>
    
    <?php
    $Dosen = [
        'Nama' => 'Elok Nur Hamdana',
        'Domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];

    echo "Nama : {$Dosen ['Nama']} <br>";
    echo "Domisili : {$Dosen ['Domisili']} <br>";
    echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";
    ?>
</body>
</html