<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Product_name = $_POST['Product_name'];
$Category = $_POST['Category'];
$Price = $_POST['Price'];
$Discount = $_POST['Discount'];
 
// update data ke database
mysqli_query($koneksi,"update products set Product_name='$Product_name', Category='$Category', Price='$Price', Discount='$Discount' where Id='$Id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>