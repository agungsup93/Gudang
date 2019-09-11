<?php
include "../../koneksi.php";
mysqli_query($koneksi, "DELETE from in_barang WHERE id='$_GET[id]'");
echo "<script language='javascript'> alert ('Laporan Material Masuk Berhasil Dihapus'); window.location = '../lap-in.php'</script>";
?>