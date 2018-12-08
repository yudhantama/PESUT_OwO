<?php
include("../config/koneksi.php");
$sql = "DELETE FROM kategori_berita WHERE id_kategori = ".$_GET['id'];
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "Data berhasil dihapus.";
?>

 <p>[ <a href="index.php?page=tampil_kategori">Tampil Data</a> ] </p>