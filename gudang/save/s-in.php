<?php
include '../../koneksi.php';
$rfp		= $_POST['rfp'];
$tgl		= $_POST['tgl'];
$part_no	= $_POST['part_no'];
$material	= $_POST['material'];
$satuan		= $_POST['satuan'];
$qty		= $_POST['qty'];
$lokasi		= $_POST['lokasi'];

if (isset($_POST['save'])){
	
$query = mysqli_query($koneksi, "insert into in_barang (rfp, tgl, part_no, material, satuan, qty, lokasi)
values ('".$rfp."','".$tgl."','".$part_no."','".$material."','".$satuan."','".$qty."','".$lokasi."')");
}
echo "<script language='javascript'> alert('Laporan Barang Keluar Telah Berhasil'); window.location='../lap-in.php'</script> ";
?>