      <?php
      
      include("../config/koneksi.php");
     

      $sql = "SELECT * FROM kategori_berita ";
      $sql.= "WHERE id_kategori = ".$_GET['id'];
      
      $hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
      $data  = mysql_fetch_assoc($hasil);
      
      ?>
      <h2>Ubah Data</h2>
      
      <?php
         if (isset($_POST['txtID']))
         {
            $sql = "UPDATE kategori_berita SET ";
            $sql.= "nama_kategori='".$_POST['txtNamaKategori']."' ";
            $sql.= "WHERE id_kategori = ".$_POST['txtID'];
            mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
            echo "Data berhasil diubah.";
         }
         else
         {
      ?>
      <form action="index.php?page=edit_kategori&id=<?php echo $_GET['id'] ?>" method="post">
         Nama Kategori :&nbsp;
         <input type="text" name="txtNamaKategori" value="<?php echo $data['nama_kategori'];
         ?>" />
         <br />
         
         <input type="hidden" name="txtID" value="<?php echo $data['id_kategori'];
         ?>" />
         <input type="submit" value="Submit" />
      </form>
      <?php
         }
      ?>

       <p>[ <a href="index.php?page=tampil_kategori">Tampil Data</a> ] </p>
