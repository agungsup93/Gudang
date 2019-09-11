<?php
include "../koneksi.php";
$out_brg = mysqli_fetch_array(mysqli_query($koneksi, "select * from stok where part_no='$_GET[part_no]'"));
$data_out_brg = array  ('material'   	=>  $out_brg['material'],
						'satuan'	  	=>  $out_brg['satuan'],
						'lokasi'	  	=>  $out_brg['lokasi'],);
 echo json_encode($data_out_brg);
 ?>