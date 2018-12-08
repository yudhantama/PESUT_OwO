      <h2>Daftar Produk</h2>
      <p>[ <a href="index.php?page=tambah_produk">Tambah Data</a> ] </p>
      <table width="650px" border="1">
         <tr style="background:#ccc">
            <th >ID</th>
            <th >Nama Produk</th>
            <th >Deskripsi</th>
            <th >Gambar</th>
            <th >Aksi</th>
         </tr>
         <?php
         
         
         
         $sql   = "SELECT * FROM produk";
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
         
         while($data = mysql_fetch_assoc($hasil)){
         ?>
            <tr>
               <td align="center"><?php echo $data['id_produk']; ?></td>
               <td><?php echo $data['nama_produk']; ?></td>
               <td><?php echo $data['deskripsi']; ?></td>
               <td><img src="foto_produk/<?php echo $data['gambar']; ?>" width="50"/></td>
               <td>
                  <a href="index.php?page=detail_produk&id=<?php echo $data['id_produk']; ?>">
                     Detail
                  </a>
                  <a href="index.php?page=edit_produk&id=<?php echo $data['id_produk']; ?>">
                     Ubah
                  </a>
                  <a href="index.php?page=hapus_produk&id=<?php echo $data['id_produk']; ?>" 
                     onClick="return cekHapus();">
                     Hapus
                  </a>
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
   