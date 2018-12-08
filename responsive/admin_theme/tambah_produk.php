   <?php
  

   if (isset($_POST['txtNamaProduk']))
      {
         $lokasi_file = $_FILES['fupload']['tmp_name'];
         $nama_file   = $_FILES['fupload']['name'];
         //script untuk upload nama file gambar
         move_uploaded_file($lokasi_file,"foto_produk/$nama_file");
         //script untuk upload gambar
         $sql = "INSERT INTO produk (nama_produk,deskripsi,gambar) ";
         $sql.= "VALUES ('".$_POST['txtNamaProduk']."','".$_POST['txtDeskripsi']."','".$nama_file."')";
         mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
         echo "Data berhasil ditambahkan.";
             
      }

      else 
     
      {
   ?>
      <form action="index.php?page=tambah_produk" method="post" enctype='multipart/form-data'>
         Nama Produk: &nbsp;<input type="text" name="txtNamaProduk" />
         <br />
         Deskripsi : <textarea name="txtDeskripsi"></textarea>
         <br />
         Gambar : &nbsp;<input type=file name=fupload size=40 />
         <br />
         <input type="submit" value="Submit" />
      </form>

   <?php
              
      }

   ?>


   <p>[ <a href="index.php?page=tampil_produk">Tampil Data</a> ] </p>
