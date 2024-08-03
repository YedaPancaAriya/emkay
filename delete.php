<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$Id = $_GET['Id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from products where Id='$Id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>