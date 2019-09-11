<?php include '_base/head.php';?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include '_base/menu.php'; ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Edit Data Laporan Keluar <br>
        <small>PT. Globalnine Indonesia</small>
      </h1>
      <ol class="breadcrumb">
        <li>
				
		</li>
      </ol>
    </section>
	
	    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body"><br>
					<?php
					include '../koneksi.php';
					$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM out_barang WHERE id = '$_GET[id]'"));
					?>
					<?php
					echo"
					<form method='POST' action='' class='form-horizontal'> 
						<div class='form-group'>
							<label class='control-label col-sm-2'>RFP</label>
							<div class='col-sm-3'>
								<input	type='text'	name='rfp'	class='form-control'value='$data[rfp]' required>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Tanggal</label>
							<div class='col-sm-3'>
								<input	type='date'	name='tgl'	class='form-control'value='$data[tgl]' required>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Part No</label>
							<div class='col-sm-3'>
								<input	type='text'	name='part_no'	class='form-control'value='$data[part_no]' disabled>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Material</label>
							<div class='col-sm-3'>
								<input	type='text'	name='material'	class='form-control'value='$data[material]' required autocomplete='off'>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Qty</label>
							<div class='col-sm-3'>
								<input	type='text'	name='qty'	class='form-control'value='$data[qty]' disabled autocomplete='off'>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Satuan</label>
							<div class='col-sm-3'>
								<input	type='text'	name='satuan'	class='form-control'value='$data[satuan]' required autocomplete='off'>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Lokasi</label>
							<div class='col-sm-3'>
								<input	type='text'	name='lokasi'	class='form-control'value='$data[lokasi]' required autocomplete='off'>
							</div>
						</div>
						<div class='form-group'>
						<label class='col-sm-3 control-label'></label>
							<div class='col-sm-8'>
							<button type='reset' class='btn btn-default pull-left'>
							<a href='lap-out.php'>
								<span class='fa fa-reply-all'></span> Kembali</button></a> &nbsp;&nbsp;
							<button type='submit' name='save' class='btn btn-success'>
								<span class='fa fa-floppy-o'></span> Simpan</button>
							</div>
						</div>
					</form>";
					?>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <?php include '_base/footer-nama.php'; ?>
</div>
<?php include '_base/footer.php' ;?>
<?php
include '../koneksi.php';
	$id		 = $_GET['id'];
if(isset($_POST['save'])){
	$rfp		= $_POST['rfp'];
	$tgl		= $_POST['tgl'];
	$material	= $_POST['material'];
	$satuan		= $_POST['satuan'];
	$lokasi		= $_POST['lokasi'];
	
$update = mysqli_query($koneksi, "UPDATE out_barang SET 
rfp			=	'$rfp', 
tgl			=	'$tgl', 
material	=	'$material', 
satuan		=	'$satuan',
lokasi		=	'$lokasi' WHERE id='$id'") or die(mysqli_error());
echo "<script>alert ('Data Telah Berhasil Dirubah'); document.location='lap-out.php' </script>";}
?>



