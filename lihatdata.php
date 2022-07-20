<?php 
$fp = fopen("datapendaftar.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp,999)) {
    $pisah = explode("|", $isi);

    echo "<tr><td>Alamat Email: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Nama Lengkap: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>Nama Panggilan: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Jenis Kelamin: </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>Domisili Kota: </td><td>: $pisah[4] </td></tr>";
    echo "<tr><td>Pekerjaan: </td><td>: $pisah[5] </td></tr>";
    echo "<tr><td>Nomor WA Aktif: </td><td>: $pisah[6] </td></tr>";
    echo "<tr><td>Username IG </td><td>: $pisah[7] </td></tr>";
    echo "<tr><td>Alasan ikut komunitas: </td><td>: $pisah[8] </td></tr>
    <tr><td>&nbsp;<href></td><td>&nbsp;<hr></td></tr>";

}

echo "<a href='index.html'>Kembali ke pengisisan formulir pendaftaraan</a><br>";

?>