<?php

$sql   = "SELECT * FROM produk WHERE id_produk = ".$_GET['id'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data  = mysql_fetch_assoc($hasil);
echo "ID Berita: ".$data['id_produk'];
echo "<br />";
echo "Judul : ".$data['nama_produk'];
echo "<br />";
echo "Isi Berita : ".$data['deskripsi'];
?>

 <p>[ <a href="index.php?page=tampil_produk">Tampil Data</a> ] </p>