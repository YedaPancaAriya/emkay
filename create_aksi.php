<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Product_name = $_POST['Product_name'];
$Category = $_POST['Category'];
$Price = $_POST['Price'];
$Discount = $_POST['Discount'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into products values('','$Product_name','$Category','$Price','$Discount')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>