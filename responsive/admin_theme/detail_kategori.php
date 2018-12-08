<?php
include("../config/koneksi.php");
$sql   = "SELECT * FROM kategori_berita WHERE id_kategori = ".$_GET['id'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data  = mysql_fetch_assoc($hasil);
echo "ID : ".$data['id_kategori'];
echo "<br />";
echo "Nama Kategori: ".$data['nama_kategori'];
?>

 <p>[ <a href="index.php?page=tampil_kategori">Tampil Data</a> ] </p>