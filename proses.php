<?php

echo "<style>
    body {
        height: 1000px;
        display: flex;
        justify-content: center
        align-items: center;   
        min-height: 100vh;
        margin: 0;
        background-image: linear-gradient(135deg, #e0f7fa, #b3e5fc, #b2ebf2)
    }
    .satu{
        color: #0288d1 ;
    }
    .dua{
        color: blue ;
    }
    div{
        max-width: 900px;
        margin: auto;
        background-color:rgba(255, 255, 255, 0.4);
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
        padding: 50px;
        border-radius: 20px;
        text-align: center;
        font-size: 50px;
    }
    </style>";

// Ambil data
$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];

// Validasi
if ($password !== $confirmpassword) {
    echo "Password dan Konfirmasi Password tidak cocok!<br>";
    echo "<a href='index.html'>Kembali</a>";
    exit;
}

//Simpan data ke dalam array PHP
$dataPengguna = array(
    "nama" => $nama,
    "email" => $email,
    "password" => $password
);

//Ubah array menjadi string (format: nama;email;password)
$dataString = implode(";", $dataPengguna) . "\n";

//Simpan ke file data.txt
file_put_contents("data.txt", $dataString, FILE_APPEND);
//FILE_APPEND = data baru akan ditambahkan ke bawah, tidak menimpa data sebelumnya.

//menampilkan pesan "Registrasi Berhasil" beserta data

echo "<div>";
echo "<h2>Registrasi Berhasil!</h2>";
echo "<p><strong>Nama:</strong> {$dataPengguna['nama']}</p>";
echo "<p><strong>Email:</strong> {$dataPengguna['email']}</p>";
echo "<p><strong>Password:</strong> {$dataPengguna['password']}</p>";

echo "<br><a href='index.html' class=satu >FORM</a> | ";
echo "<a href='daftar_pengguna.php' class=dua >DAFTAR REGISTER</a></div>";

?>
