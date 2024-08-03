<!DOCTYPE html>
<html>
<head>
	<title>PT. INDO EMKAY ABADI - YEDA PANCA ARIYA</title>
</head>
<body>
 
	<h2>PT. INDO EMKAY ABADI - YEDA PANCA ARIYA</h2>
	<br/>
	<a href="create.php">+ CREATE</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>PRODUCTS NAME</th>
			<th>CATEGORY</th>
			<th>PRICE</th>
			<th>DISCOUNT</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from products");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Product_name']; ?></td>
				<td><?php echo $d['Category']; ?></td>
				<td><?php echo $d['Price']; ?></td>
				<td><?php echo $d['Discount']; ?></td>
				<td>
					<a href="edit.php?Id=<?php echo $d['Id']; ?>">EDIT</a>
					<a href="delete.php?Id=<?php echo $d['Id']; ?>">DELETE</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>