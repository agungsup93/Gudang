<?php
include '../../koneksi.php';

$part_no		=	$_POST['part_no'];
$material		=	$_POST['material'];
$qty			=	$_POST['qty'];
$satuan			=	$_POST['satuan'];
$lokasi			=	$_POST['lokasi'];

if (isset($_POST['save'])){
	
$query = mysqli_query($koneksi, "insert into stok(part_no, material, qty, satuan, lokasi)
values ('".$part_no."','".$material."','".$qty."','".$satuan."','".$lokasi."')");
}
echo "<script language = 'javascript'> alert ('Data Berhasil ditambahkan'); window.location='../soh.php'</script> ";
mysqli_query($query);

?>