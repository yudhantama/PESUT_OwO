<?php
include "../config/koneksi.php";
$pass=md5($_POST['password']);
$sql="select * from user where username='$_POST[username]' and password='$pass'";

$login=mysql_query($sql);
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

//apabila username ketemu
if($ketemu > 0) {
	session_start() ; //memulai session
	//daftarkan session ke server
	//session_register("namauser");
	//session_register("passuser");
	//session_register("leveluser");
	
	//isi dari variabel session
	$_SESSION[namauser]=$r['username'];
	$_SESSION[passuser]=$r['password'];
	$_SESSION[leveluser]=$r['level'];
	header('location:index.php?'); 
	}
else {
	echo "<link href=../config/adminstyle.css rel=stylesheet type=text/css>";
  	echo "<center>Login gagal! username & password tidak benar<br>";
  	echo "<a href=index.php><b>ULANGI LAGI</b></a></center>"; }
?>
