<?php

$sql   = "SELECT * FROM berita WHERE id_berita = ".$_GET['id'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data  = mysql_fetch_assoc($hasil);
echo "ID Berita: ".$data['id_berita'];
echo "<br />";
echo "Judul : ".$data['judul'];
echo "<br />";
echo "Isi Berita : ".$data['isi_berita'];
?>

 <p>[ <a href="index.php?page=tampil_berita">Tampil Data</a> ] </p>