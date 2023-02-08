<?php 
include "koneksi.php";
$nama=$_POST['User'];
$password=$_POST['Pass'];
mysqli_query($konek,"INSERT INTO tb_pengguna (nama_pengguna,sandi_pengguna) VALUES ('".$nama."','".$password."')");		// ini nanti di redirect ke halaman login
header("location:lihat_pengguna.php");	