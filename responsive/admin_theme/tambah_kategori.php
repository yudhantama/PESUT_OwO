   <?php
   include("koneksi.php");

   if (isset($_POST['txtNamaKategori']))
      {
         $sql = "INSERT INTO kategori_berita(nama_kategori) ";
         $sql.= "VALUES ('".$_POST['txtNamaKategori']."')";
         mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
         echo "Data berhasil ditambahkan.";
             
      }

      else 
     
      {
   ?>
      <form action="index.php?page=tambah_kategori" method="post">
         Nama Kategori : &nbsp;<input type="text" name="txtNamaKategori" />
         <br />
         
         <input type="submit" value="Submit" />
      </form>

   <?php
              
      }

   ?>


   <p>[ <a href="index.php?page=tampil_kategori">Tampil Data</a> ] </p>
