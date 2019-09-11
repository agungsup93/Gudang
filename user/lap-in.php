<?php include '_base/head.php';?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
<?php include '_base/menu.php'; ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Laporan Material Masuk <br>
        <small>PT. Globalnine Indonesia</small>
      </h1>
      <ol class="breadcrumb">
      	
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">	
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
					<tr>
					  <th>NO</th>
					  <th>RFP</th>
					  <th>Tanggal</th>
					  <th>Part No</th>
					  <th>Material</th>
					  <th>Qty</th>
					  <th>Satuan</th>
					  <th>Lokasi</th>
					</tr>
				</thead>
				<?php
					include '../koneksi.php';
					$no=0;
					$query=mysqli_query($koneksi, "select * from in_barang order by id DESC");
					while($data=mysqli_fetch_array($query)){
					$no++;
					echo"		 
					<tr>
					<td>$no</td>
					<td>$data[rfp]</td>
					<td>$data[tgl]</td>
					<td>$data[part_no]</td>
					<td>$data[material]</td>
					<td>$data[qty]</td>
					<td>$data[satuan]</td>
					<td>$data[lokasi]</td>
					</tr>
                ";
					?>
					<?php
					}
             	echo "</tbody></table>";
					?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include '_base/footer-nama.php'; ?>
</div>
<?php include '_base/footer.php' ;?>	
<script>
function myFunction() {
  document.getElementById("myDate").value = "DD-MM-YYYY";
}
</script>