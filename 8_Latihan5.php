<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5</title>
    <link rel="icon" type="img/png" href="#" sizes="16x16" />
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307049">
    <meta name="author" content="Angger Rahmadi">
</head>
<body>
    <?php

    $warna = "merah";
    switch ($warna) {
        case "merah":
            echo "warna adalah merah";
            break;
        case "kuning":
            echo "warna adalah kuning";
            break;
        case "hijau":
            echo "warna adalah hijau";
            break;
        default:
            echo "warna tidak dikenal";
    }
    echo "<br>";

    ?>
</body>
</html>