<?php
include("../config/koneksi.php");
$sql = "DELETE FROM berita WHERE id_berita = ".$_GET['id'];
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "Data berhasil dihapus.";
?>

 <p>[ <a href="index.php?page=tampil_berita">Tampil Data</a> ] </p>