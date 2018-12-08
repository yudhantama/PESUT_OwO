      <?php
      
      
     

      $sql = "SELECT * FROM produk ";
      $sql.= "WHERE id_produk = ".$_GET['id'];
      
      $hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
      $data  = mysql_fetch_assoc($hasil);
      
      ?>
      <h2>Ubah Data Produk</h2>
      
      <?php
         if (isset($_POST['txtIDProduk']))
         {
            $lokasi_file = $_FILES['fupload']['tmp_name'];
            $nama_file   = $_FILES['fupload']['name'];
            //script untuk upload nama file gambar
            move_uploaded_file($lokasi_file,"foto_produk/$nama_file");
            //script untuk upload gambar
            $sql = "UPDATE produk SET ";
            $sql.= "nama_produk='".$_POST['txtNamaProduk']."',deskripsi='".$_POST['txtDeskripsi']."',gambar='".$nama_file."' ";
            $sql.= "WHERE id_produk = ".$_POST['txtIDProduk'];
            mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
            echo "Data berhasil diubah.";
         }
         else
         {
      ?>
      <form action="index.php?page=edit_produk&id=<?php echo $_GET['id'] ?>" method="post" enctype='multipart/form-data'>
         Nama Produk:&nbsp;
         <input type="text" name="txtNamaProduk" value="<?php echo $data['nama_produk'];
         ?>" />
         <br />
         Deskripsi:&nbsp;
         <textarea name="txtDeskripsi"><?php echo $data['deskripsi']; ?></textarea>
         <br />
         Gambar : &nbsp;<img src="foto_produk/<?php echo $data['gambar'] ?>" width="100" />
         <br />
         Ganti Gambar : &nbsp;<input type=file name=fupload size=40 />
         <br />
         <input type="hidden" name="txtIDProduk" value="<?php echo $data['id_produk'];
         ?>" />
         <input type="submit" value="Submit" />
      </form>
      <?php
         }
      ?>

       <p>[ <a href="index.php?page=tampil_produk">Tampil Data</a> ] </p>
