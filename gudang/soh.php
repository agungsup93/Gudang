<?php include '_base/head.php';?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include '_base/menu.php'; ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Stock On Hand <br>
        <small>PT. Globalnine Indonesia</small>
      </h1>
      <ol class="breadcrumb">
        <li>
			<a href="#" class="small-box-footer">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal1-default">
				<span class="fa fa-plus-square-o"></span> Tambah Material</button>
			</a>	
		</li>
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
					  <th>Part No</th>
					  <th>Material</th>
					  <th>Qty</th>
					  <th>Satuan</th>
					  <th>Lokasi</th>
					  <th>Action</th>
					</tr>
				</thead>
				<?php
					include '../koneksi.php';
					$no=0;
					$query=mysqli_query($koneksi, "select * from stok order by part_no ASC");
					while($data=mysqli_fetch_array($query)){
					$no++;
					echo"		 
					<tr>
					<td>$no</td>
					<td>$data[part_no]</td>
					<td>$data[material]</td>
					<td>$data[qty]</td>
					<td>$data[satuan]</td>
					<td>$data[lokasi]</td>
					<td>
						<center>
							<a href='delete/soh.php?part_no=$data[part_no]' class='btn btn-danger btn-xs' onClick='return hapus()'title='Hapus Data'>
								<span class='fa fa-trash-o'></span> Hapus</a> || 
							<a href='e-soh.php?part_no=$data[part_no]' class='btn btn-warning btn-xs' title='Edit Data'>
								<span class='fa fa-pencil-square-o'></span> Edit</a>
							</a>&nbsp;&nbsp;&nbsp;&nbsp;
						</center>
					</td>
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




		<div class="modal fade" id="modal1-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"></span></button>
                <h4 class="modal-title">Tambah Data Material</h4>
              </div>
              <div class="modal-body">
					<form name='input' method='POST' action='save/s-stok.php' class='form-horizontal'>
					<div class="form-group">
						<label class="col-sm-3 control-label">Part No</label>
							<div class="col-sm-5">
						<input type='text' name='part_no' placeholder='Part Number' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Material</label>
							<div class="col-sm-5">
						<input type='text' name='material' placeholder='Material' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Qty</label>
							<div class="col-sm-5">
						<input type='text' name='qty' placeholder='Qty' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Satuan</label>
							<div class="col-sm-5">
						<input type='text' name='satuan' placeholder='Satuan' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Lokasi</label>
							<div class="col-sm-5">
						<input type='text' name='lokasi' placeholder='Lokasi' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
					<span class="fa fa-sign-out"></span> Cancel</button>
                <button type="submit" name='save' class="btn btn-primary">
					<span class="fa fa-floppy-o"></span> Simpan</button>
              </div>
			  </form>
            </div>
          </div>
        </div>
		