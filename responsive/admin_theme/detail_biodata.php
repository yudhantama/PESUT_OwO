<?php
include "../config/koneksi.php";
$sql   = "SELECT * FROM biodata WHERE id = ".$_GET['id'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data  = mysql_fetch_assoc($hasil);
echo "ID : ".$data['id'];
echo "<br />";
echo "Nama : ".$data['nama'];
echo "<br />";
echo "Alamat : ".$data['alamat'];
?>

 <p>[ <a href="index.php?page=tampil_biodata">Tampil Data</a> ] </p>