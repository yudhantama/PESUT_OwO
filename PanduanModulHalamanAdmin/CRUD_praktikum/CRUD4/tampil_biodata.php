<html>
	<head>
		<title>Contoh Pengambilan Data Jamak</title>
	</head>
<body>
	<h2>Daftar Biodata</h2>
	<p>[ <a href="tambah_biodata.php">Tambah Data</a> ] </p>
	<table width="600px" border="1">
		<tr style="background:#ccc">
			<th width="10%">ID</th>
			<th width="25%">Nama</th>
			<th width="40%">Alamat</th>
			<th width="25">Aksi</th>
		</tr>

		<?php
		include("koneksi.php");
		$sql = "SELECT * FROM biodata";
		$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
	
		while($data = mysql_fetch_assoc($hasil)){ ?>
		<tr>
			<td align="center"><?php echo $data['id']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><center>
				<a href="detail_biodata.php?id=<?php echo $data['id']; ?>">
				Detail
				</a>
				<a href="edit_biodata.php?id=<?php echo $data['id']; ?>">
				Ubah
				</a>
				<a href="hapus_biodata.php?id=<?php echo $data['id']; ?>"
				onClick="return cekHapus();">
				Hapus
				</a>
				</center>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
	<script language="JavaScript">
      function cekHapus(){
         if(confirm("Yakin? Ciyus mau hapus data ini?")){
            return true;
         } else {
            return false;
         }
      }
   	</script>
</body>
</html>
	