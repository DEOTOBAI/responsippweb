<?php 


$fp = fopen("datapendaftar.txt", "a+");
$email = $_POST['email'];
$nama = $_POST['nama'];
$namap = $_POST['namap'];
$kelamin = $_POST['kelamin'];
$kota = $_POST['kota'];
$pekerjaan = $_POST['pekerjaan'];
$nomorwa = $_POST['nomorwa'];
$usig = $_POST['usig'];
$alasan = $_POST['alasan'];
fputs($fp, "$email|$nama|$namap|$kelamin|$kota|$pekerjaan|$nomorwa|$usig|$alasan\n");
fclose($fp);

echo '<span style="font-size: 33px;">';
echo "<center>Formulir Pendaftaraan Anggota Komunitas -034<br><br></center>";
echo '<span style="font-size: 15px;">';
echo "Terima kasih telah mengisi formulir pendaftaraan anggota komunitas -034. Data anda telah kami terima dan akan segera diproses.<br><br>";
echo "<a href='index.html'>Kembali ke pengisisan formulir pendaftaraan</a><br>";
echo "<a href='lihatdata.php'>Lihat data pendaftar</a><br>";

 ?>