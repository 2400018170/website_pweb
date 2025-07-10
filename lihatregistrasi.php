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
    color :rgb(137, 22, 232) ;
}
</style>";

    echo "<head><title>Data Register</title></head>";
    $fileku = fopen("data.txt", "r");

    echo "<table>";
    while($isi = fgets($fileku)) {
        $pisah = explode(";", $isi);

        echo "<tr><td>Nama </td><td> : $pisah[0]</td></tr>";
        echo "<tr><td>Email </td><td> : $pisah[1]</td></tr>";
        echo "<tr><td>Password </td><td> : $pisah[2]</td></tr>";
        echo "<tr><td>Confirm password </td><td> : $pisah[3]</td></tr>";
    }
    echo "</table>";

    echo "<a href='index.html'>::Tampilan Utama::</a>";
?>