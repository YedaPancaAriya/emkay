<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>
 
	<h2>PT. INDO EMKAY ABADI - YEDA PANCA ARIYA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT PRODUCT</h3>
 
	<?php
	include 'koneksi.php';
	$Id = $_GET['Id'];
	$data = mysqli_query($koneksi,"select * from products where Id='$Id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>PRODUCT NAME</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="Product_name" value="<?php echo $d['Product_name']; ?>">
					</td>
				</tr>
				<tr>
					<td>CATEGORY</td>
					<td><input type="text" name="Category" value="<?php echo $d['Category']; ?>"></td>
				</tr>
				<tr>
					<td>PRICE</td>
					<td><input type="number" name="Price" value="<?php echo $d['Price']; ?>"></td>
				</tr>
				<tr>
					<td>DISCOUNT</td>
					<td><input type="number" name="Discount" value="<?php echo $d['Discount']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>