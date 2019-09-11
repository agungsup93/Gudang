<?php
include "../../koneksi.php";
mysqli_query($koneksi, "DELETE from stok WHERE part_no='$_GET[part_no]'");
echo "<script language='javascript'> alert ('Stok Barang Berhasil Dihapus'); window.location = '../soh.php'</script>";
?>