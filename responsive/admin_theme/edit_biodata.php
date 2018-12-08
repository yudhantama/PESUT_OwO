      <?php
      
      include("../config/koneksi.php");
     

      $sql = "SELECT id,nama,alamat FROM biodata ";
      $sql.= "WHERE id = ".$_GET['id'];
      
      $hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
      $data  = mysql_fetch_assoc($hasil);
      
      ?>
      <h2>Ubah Data</h2>
      
      <?php
         if (isset($_POST['txtID']))
         {
            $sql = "UPDATE biodata SET ";
            $sql.= "nama='".$_POST['txtNama']."',alamat='".$_POST['txtAlamat']."' ";
            $sql.= "WHERE id = ".$_POST['txtID'];
            mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
            echo "Data berhasil diubah.";
         }
         else
         {
      ?>
      <form action="index.php?page=edit_biodata&id=<?php echo $_GET['id'] ?>" method="post">
         Nama :&nbsp;
         <input type="text" name="txtNama" value="<?php echo $data['nama'];
         ?>" />
         <br />
         Alamat :
         <textarea name="txtAlamat"><?php echo $data['alamat']; ?></textarea>
         <br />
         <input type="hidden" name="txtID" value="<?php echo $data['id'];
         ?>" />
         <input type="submit" value="Submit" />
      </form>
      <?php
         }
      ?>

       <p>[ <a href="index.php?page=tampil_biodata">Tampil Data</a> ] </p>
