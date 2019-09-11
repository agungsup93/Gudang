<?php include '_base/head.php';?>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
<?php include '_base/menu.php'; ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data User <br>
        <small>PT. Globalnine Indonesia</small>
      </h1>
      <ol class="breadcrumb">
        <li>
			<a href="#" class="small-box-footer">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal1-default">
				<span class="fa fa-plus-square-o"></span> Tambah Data User</button>
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
					  <th>NIK</th>
					  <th>Nama</th>
					  <th>Jabatan</th>
					  <th>Password</th>
					  <th>Action</th>
					</tr>
				</thead>
				<?php
					include '../koneksi.php';
					$no=0;
					$query=mysqli_query($koneksi, "select * from user order by nik ASC");
					while($data=mysqli_fetch_array($query)){
					$no++;
					echo"		 
					<tr>
					<td>$no</td>
					<td>$data[nik]</td>
					<td>$data[nama] $data[pjg]</td>
					<td>$data[jabatan]</td>
					<td>$data[pass]</td>
					<td>
						<center>
							<a href='delete/user.php?nik=$data[nik]' class='btn btn-danger btn-xs' onClick='return hapus()'title='Hapus Data'>
								<span class='fa fa-trash-o'></span> Hapus</a>
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
                <h4 class="modal-title">Tambah Data User</h4>
              </div>
              <div class="modal-body">
					<form name='input' method='POST' action='save/s-user.php' class='form-horizontal'>
					<div class="form-group">
						<label class="col-sm-3 control-label">NIK</label>
							<div class="col-sm-5">
						<input type='text' name='nik' placeholder='NIK' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Nama Depan</label>
							<div class="col-sm-5">
						<input type='text' name='nama' placeholder='Nama Panggilan' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Nama Belakang</label>
							<div class="col-sm-5">
						<input type='text' name='pjg' placeholder='Nama Belakang' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Jabatan</label>
							<div class="col-sm-5">
						<input type='text' name='jabatan' placeholder='Jabatan' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Password</label>
							<div class="col-sm-5">
						<input type='password' name='password' placeholder='Password' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Konsfirmasi Password</label>
							<div class="col-sm-5">
						<input type='text' name='pass' placeholder='Konsfirmasi Password' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class='form-group' hidden>
						<label class='col-sm-2 control-label'>Level</label>
							<div class='col-sm-5'>
								<select name='level' class='form-control' required>
									<option value='3'>3</option>
								</select>
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
		