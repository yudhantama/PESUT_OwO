      <?php
      
      
     

      $sql = "SELECT * FROM berita ";
      $sql.= "WHERE id_berita = ".$_GET['id'];
      
      $hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
      $data  = mysql_fetch_assoc($hasil);
      
      ?>
      <h2>Ubah Data</h2>
      
      <?php
         if (isset($_POST['txtID']))
         {
            $lokasi_file = $_FILES['fupload']['tmp_name'];
            $nama_file   = $_FILES['fupload']['name'];
            //script untuk upload nama file gambar
            move_uploaded_file($lokasi_file,"foto_berita/$nama_file");
            //script untuk upload gambar
            $sql = "UPDATE berita SET ";
            $sql.= "judul='".$_POST['txtJudul']."'";
            $sql.=",isi_berita='".$_POST['txtIsiBerita']."',tanggal='".$_POST['Tanggal']."',gambar='".$nama_file."'";
            $sql.= " WHERE id_berita = ".$_POST['txtID'];
            mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
            echo "Data berhasil diubah.";
         }
         else
         {
            $sql = "SELECT * FROM kategori_berita ORDER BY nama_kategori";
            $mysql_query = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
      ?>
      <form action="index.php?page=edit_berita&id=<?php echo $_GET['id'] ?>" method="post" enctype='multipart/form-data'>
         Judul :&nbsp;
         <input type="text" name="txtJudul" value="<?php echo $data['judul'];
         ?>" />
         <br />

         Kategori : &nbsp; <select name=txtIdKategori>
                           <option value=0 selected>- Pilih Kategori -</option>
                           <?php
                           while ( $kategori = mysql_fetch_assoc($mysql_query)) {
                              # code...
                              if ($data[id_kategori]==$kategori[id_kategori]){
                                    echo "<option value=$kategori[id_kategori] selected>$kategori[nama_kategori]</option>";
                                  }
                                  else{
                                    echo "<option value=$kategori[id_kategori]>$kategori[nama_kategori]</option>";
                                  }
                           }
                           ?>
                           </select>

         <br />

         Isi Berita :
         <textarea name="txtIsiBerita" rows="10" cols="40"><?php echo $data['isi_berita']; ?></textarea>
         <br />
         Tanggal : &nbsp;<input type="date" name="Tanggal" />
         <br />
         Gambar : &nbsp;<img src="foto_berita/<?php echo $data['gambar'] ?>" width="100" />
         <br />
         Ganti Gambar : &nbsp;<input type=file name=fupload size=40 />
         <br />
         <input type="hidden" name="txtID" value="<?php echo $data['id_berita'];
         ?>" />
         <input type="submit" value="Submit" />
      </form>
      <?php
         }
      ?>

       <p>[ <a href="index.php?page=tampil_berita">Tampil Data</a> ] </p>
