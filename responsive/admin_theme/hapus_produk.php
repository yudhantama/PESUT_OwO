<?php
include("../config/koneksi.php");
$sql = "DELETE FROM produk WHERE id_produk = ".$_GET['id'];
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "Data berhasil dihapus.";
?>

 <p>[ <a href="index.php?page=tampil_produk">Tampil Data</a> ] </p>