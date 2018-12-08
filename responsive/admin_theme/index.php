<?php
session_start();
include "../config/koneksi.php";
//include "library.php";
//print_r($_SESSION);
if(empty($_SESSION['namauser']) ) {
//echo "blum ada";
header('location:login.php');
exit;
}
?>


<html>
<head>
<title>Web Company Profile</title>
<link href="asset/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="satu">
    <div id="satu_con">
        <div id="satu_a">
            <span class="satu_aa">Selemat Datang Administrator</span>
            <span class="satu_ab">Creative & Innovative</span>
        </div>
        <div id="satu_b">
            <ul>
                <li><a href="index.php?page=home" class="pilih">Home</a></li>
                <li><a href="index.php?page=tampil_kategori">Kategori</a>
                <li><a href="index.php?page=tampil_berita">Berita</a>
                <li><a href="index.php?page=tampil_produk">Produk</a>
                <li><a href="index.php?page=tampil_biodata">Biodata</a>
                <li><a href="index.php?page=logout">Logout</a>
                    
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="dua">
    <div id="dua_con">
        <div id="dua_a">
            <div id="dua_aa">
                <!--
                <span id="dua_aab">Data Biodata</span>
                <span id="dua_aaa">
                	<input type="button" value="Tambah Data" class="tambah">
                </span>
                -->
            </div>
            <div id="dua_ac">
                
            </div>
            <div id="dua_ab">
                <?php
                if (isset($_GET['page']))
                {

                    if ($_GET['page'] == "")
                        {
                            include ("home.php");
                        }
                    else
                        {
                            include ($_GET['page'].".php");
                        }
                }
                else
                {
                    include ("home.php");
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>

