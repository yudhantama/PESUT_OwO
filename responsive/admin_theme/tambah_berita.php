   <?php
  

   if (isset($_POST['txtJudul']))
      {
         $lokasi_file = $_FILES['fupload']['tmp_name'];
         $nama_file   = $_FILES['fupload']['name'];
         //script untuk upload nama file gambar
         move_uploaded_file($lokasi_file,"foto_berita/$nama_file");
         //script untuk upload gambar
         $sql = "INSERT INTO berita(judul,id_kategori,isi_berita,tanggal,gambar) ";
         $sql.= "VALUES ('".$_POST['txtJudul']."','".$_POST['txtIdKategori']."'";
         $sql.=",'".$_POST['txtIsiBerita']."','".$_POST['Tanggal']."','".$nama_file."')";
         mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
         echo "Data berhasil ditambahkan.";
             
      }

      else 

      {
         $sql = "SELECT * FROM kategori_berita ORDER BY nama_kategori";
         $mysql_query = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
                 
   ?>
      <form action="index.php?page=tambah_berita" method="post" enctype='multipart/form-data'>
         Judul : &nbsp;<input type="text" name="txtJudul" />
         <br />
         Kategori : &nbsp; <select name=txtIdKategori>
                           <option value=0 selected>- Pilih Kategori -</option>
                           <?php
                           while ( $kategori = mysql_fetch_assoc($mysql_query)) {
                              # code...
                              echo "<option value=$kategori[id_kategori]>$kategori[nama_kategori]</option>";
                           }
                           ?>
                           </select>

         <br />
         Isi Berita : <textarea name="txtIsiBerita"></textarea>
         <br />
         Tanggal : &nbsp;<input type="date" name="Tanggal" />
         <br />
         Gambar : &nbsp;<input type=file name=fupload size=40 />
         <br />
         <input type="submit" value="Submit" />
      </form>

   <?php
              
      }

   ?>


   <p>[ <a href="index.php?page=tampil_berita">Tampil Data</a> ] </p>
