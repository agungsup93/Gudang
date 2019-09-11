<?php include '_base/head.php';?>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
<?php include '_base/menu.php'; ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard<br>
        <small>PT. Globalnine Indonesia</small>
      </h1>
    </section>

    <section class="content">
      <div class="row">
<!------------------------------------------------------------>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
				<h3>
				<?php
					include "../koneksi.php";
					$sqlCommand = "SELECT COUNT(*) FROM stok"; 
					$query = mysqli_query($koneksi, $sqlCommand) or die (mysqli_error()); 
					$rows = mysqli_fetch_row($query);
					echo "" . $rows[0] . ""; 
					mysqli_free_result($query); 
					mysqli_close($koneksi);
				?>
				</h3>

              <p>Stok Gudang</p>
            </div>
            <div class="icon">
              <i class="fa fa-bank"></i>
            </div>
            <a href="soh.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<!------------------------------------------------------------>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
				 <h3>
				 <?php
					include "../koneksi.php";
					$sqlCommand = "SELECT COUNT(*) FROM in_barang"; 
					$query = mysqli_query($koneksi, $sqlCommand) or die (mysqli_error()); 
					$rows = mysqli_fetch_row($query);
					echo "" . $rows[0] . ""; 
					mysqli_free_result($query); 
					mysqli_close($koneksi);
				?>
				</h3>

              <p>Laporan Material Masuk</p>
            </div>
            <div class="icon">
              <i class="fa fa-sign-in"></i>
            </div>
            <a href="lap-in.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<!------------------------------------------------------------>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
				<?php
					include "../koneksi.php";
					$sqlCommand = "SELECT COUNT(*) FROM out_barang"; 
					$query = mysqli_query($koneksi, $sqlCommand) or die (mysqli_error()); 
					$rows = mysqli_fetch_row($query);
					echo "" . $rows[0] . ""; 
					mysqli_free_result($query); 
					mysqli_close($koneksi);
				?>
			  </h3>

              <p>Laporan Material Keluar</p>
            </div>
            <div class="icon">
              <i class="fa fa-sign-out"></i>
            </div>
            <a href="lap-out.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<!------------------------------------------------------------>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php
					include "../koneksi.php";
					$sqlCommand = "SELECT COUNT(*) FROM po"; 
					$query = mysqli_query($koneksi, $sqlCommand) or die (mysqli_error()); 
					$rows = mysqli_fetch_row($query);
					echo "" . $rows[0] . ""; 
					mysqli_free_result($query); 
					mysqli_close($koneksi);
				?></h3>

              <p>G Number</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-text-o"></i>
            </div>
            <a href="po.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<!------------------------------------------------------------>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php
					include "../koneksi.php";
					$sqlCommand = "SELECT COUNT(*) FROM so"; 
					$query = mysqli_query($koneksi, $sqlCommand) or die (mysqli_error()); 
					$rows = mysqli_fetch_row($query);
					echo "" . $rows[0] . ""; 
					mysqli_free_result($query); 
					mysqli_close($koneksi);
				?></h3>

              <p>PO Number</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-text-o"></i>
            </div>
            <a href="so.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<!------------------------------------------------------------>
		<div class="col-lg-3 col-xs-6">
          <div class="small-box bg-white">
            <div class="inner">
              <h3><?php
					include "../koneksi.php";
					$sqlCommand = "SELECT COUNT(*) FROM user"; 
					$query = mysqli_query($koneksi, $sqlCommand) or die (mysqli_error()); 
					$rows = mysqli_fetch_row($query);
					echo "" . $rows[0] . ""; 
					mysqli_free_result($query); 
					mysqli_close($koneksi);
				?></h3>

              <p>Total User</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="user.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<!------------------------------------------------------------>

      </div>
    </section>
  </div>
  <?php include '_base/footer-nama.php'; ?>
</div>
<?php include '_base/footer.php' ;?>