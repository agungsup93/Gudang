<?php
include "../../koneksi.php";
mysqli_query($koneksi, "DELETE from out_barang WHERE id='$_GET[id]'");
echo "<script language='javascript'> alert ('Laporan Material Keluar Berhasil Dihapus'); window.location = '../lap-out.php'</script>";
?>