<?php

echo "<style>
    body {
        height: 1000px;
        background-image: linear-gradient(135deg, #fce4ec, #f8bbd0, #f48fb1)
    }
    * {
        color: black;
    }
    .bawah{
        color :rgb(114, 44, 171) ;
    }
    </style>";

echo "<h2>Daftar Pengguna Terdaftar</h2>";

if (file_exists("data.txt")) {
    $baris = file("data.txt");
    echo "<ul>";
    foreach ($baris as $data) {
        $pecah = explode(";", trim($data));
        echo "<li>Nama: $pecah[0] | Email: $pecah[1]</li>";
    }
    echo "</ul>";
} else {
    echo "Belum ada pengguna terdaftar.";
}

echo "<br><a href='index.html' class=bawah >Kembali ke Form</a>";
?>
