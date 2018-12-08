      <h2>Daftar Biodata</h2>
      <p>[ <a href="index.php?page=tambah_kategori">Tambah Data</a> ] </p>
      <table width="400px" border="1">
         <tr style="background:#ccc">
            <th width="10%">ID</th>
            <th width="60%">Nama</th>
            
            <th width="10">Aksi</th>
         </tr>
         <?php
         
         
         
         $sql   = "SELECT * FROM kategori_berita";
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
         
         while($data = mysql_fetch_assoc($hasil)){
         ?>
            <tr>
               <td align="center"><?php echo $data['id_kategori']; ?></td>
               <td><?php echo $data['nama_kategori']; ?></td>
               
               <td>
                  <a href="index.php?page=detail_kategori&id=<?php echo $data['id_kategori']; ?>">
                     Detail
                  </a>
                  <a href="index.php?page=edit_kategori&id=<?php echo $data['id_kategori']; ?>">
                     Ubah
                  </a>
                  <a href="index.php?page=hapus_kategori&id=<?php echo $data['id_kategori']; ?>" 
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