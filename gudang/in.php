<?php include '_base/head.php';?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include '_base/menu.php'; ?>
  <div class="content-wrapper">
    <section class="content-header">
       <h1>
        Material Masuk <br>
        <small>PT. Globalnine Indonesia</small>
      </h1>
     <ol class="breadcrumb">
        <li>
			<a href="lap-in.php" class="small-box-footer">
				<button type="button" class="btn btn-info">
				<span class="fa fa-folder-open-o"></span> Laporan Material Masuk</button>
			</a>	
		</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
				<form name='input' method='POST' action='save/s-in.php' class='form-horizontal'>
					<div class='form-group'>
					<label class='col-sm-2 control-label'>Part No</label>
						<div class='col-sm-3'>
						<select onchange="cek_database()" id="part_no" name="part_no">
							<option value='' selected>- Pilih -</option>
								<?php
									include "../koneksi.php";
									$in_brg = mysqli_query($koneksi,"SELECT * FROM stok");
									while ($row = mysqli_fetch_array($in_brg)) {
										echo "<option value='$row[part_no]'>$row[part_no]</option>";
									}
								?>
						</select>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">RFP</label>
							<div class="col-sm-4">
						<input type='text' name='rfp' placeholder='Rfp' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Tanggal</label>
							<div class="col-sm-4">
						<input type='date' id='date' name='tgl' placeholder='Tanggal' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-2 control-label'>Material</label>
							<div class='col-sm-4'>
						<input type='text' readonly id='material' name='material' placeholder='Material' class='form-control'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Qty</label>
							<div class="col-sm-4">
						<input type='text' name='qty' placeholder='Qty' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-2 control-label'>Satuan</label>
							<div class='col-sm-4'>
						<input type='text' readonly id='satuan' name='satuan' placeholder='Satuan' class='form-control'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Lokasi</label>
							<div class="col-sm-4">
						<input type='text' readonly id='lokasi' name='lokasi' placeholder='Lokasi' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label"></label>
							<div class="col-sm-8">
							<button type="reset" class="btn btn-danger pull-left"> 
								<span class="fa fa-refresh"></span> Refresh</button> &nbsp;&nbsp;
							<button type="submit" name='save' class="btn btn-primary">
								<span class="fa fa-floppy-o"></span> Simpan</button>
							</div>
					</div>
					</form>
			</div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include '_base/footer-nama.php'; ?>
</div>
<?php include '_base/footer.php' ;?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function cek_database(){
        var part_no = $("#part_no").val();
        $.ajax({
            url: 'in_process.php',
            data:"part_no="+part_no ,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
			$('#material').val(obj.material);
			$('#satuan').val(obj.satuan);
			$('#lokasi').val(obj.lokasi);
        });
    }
</script>
<script>
function myFunction() {
  document.getElementById("date").value = "DD-MM-YYYY";
}
</script>