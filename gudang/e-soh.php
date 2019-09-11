<?php include '_base/head.php';?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include '_base/menu.php'; ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Edit Stock On Hand <br>
        <small>PT. Globalnine Indonesia</small>
      </h1>
      <ol class="breadcrumb">
        
      </ol>
    </section>
	
	    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body"><br>
					<?php
					include '../koneksi.php';
					$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM stok WHERE part_no = '$_GET[part_no]'"));
					?>
					<?php
					echo"
					<form method='POST' action='' class='form-horizontal'> 
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
								<input	type='text'	name='qty'	class='form-control'value='$data[qty]' required autocomplete='off'>
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
							<a href='soh.php'>
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
	$part_no = $_GET['part_no'];
if(isset($_POST['save'])){
	$material	= $_POST['material'];
	$qty 		= $_POST['qty'];
	$satuan		= $_POST['satuan'];
	$lokasi		= $_POST['lokasi'];
	
$update = mysqli_query($koneksi, "UPDATE stok SET 
material	=	'$material', 
qty			=	'$qty', 
satuan		=	'$satuan',
lokasi		=	'$lokasi' WHERE part_no='$part_no'") or die(mysqli_error());
echo "<script>alert ('Ubah Data Jabatan Telah Berhasil'); document.location='soh.php' </script>";}
?>

