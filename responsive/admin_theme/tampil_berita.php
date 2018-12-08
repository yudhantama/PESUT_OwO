      <h2>Daftar Berita</h2>
      <p>[ <a href="index.php?page=tambah_berita">Tambah Data</a> ] </p>
      <table width="650px" border="1">
         <tr style="background:#ccc">
            <th>ID Berita</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Aksi</th>
            
         </tr>
         <?php
         
         
         
         $sql   = "SELECT * FROM berita";
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
         
         while($data = mysql_fetch_assoc($hasil)){
         ?>
            <tr>
               <td align="center"><?php echo $data['id_berita']; ?></td>
               <td><?php echo $data['judul']; ?></td>
               <td><?php echo $data['tanggal']; ?></td>
               <td>
                  <a href="index.php?page=detail_berita&id=<?php echo $data['id_berita']; ?>">
                     Detail
                  </a>
                  <a href="index.php?page=edit_berita&id=<?php echo $data['id_berita']; ?>">
                     Ubah
                  </a>
                  <a href="index.php?page=hapus_berita&id=<?php echo $data['id_berita']; ?>" 
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
   