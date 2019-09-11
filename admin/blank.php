<?php include '_base/head.php';?>
<link rel="stylesheet" href="_base/pace.min.css">
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
<?php include '_base/menu.php'; ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Ooppssss...!! <br>
        <small>PT. Globalnine Indonesia</small>
      </h1>
    </section>

	    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">PT. Globalnine Indonesia</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <br/><code>Place Refresh</code>
          <br/>
          <div class="row">
            <div class="col-xs-12 text-center">
              <button type="button" class="btn btn-danger btn-lrg ajax" title="Ajax Request">
                <i class="fa fa-spin fa-refresh"></i>&nbsp; Refresh
              </button>
            </div>
          </div>
          <div class="ajax-content">
          </div>
        </div>
        <div class="box-footer">
          <strong>Copyright &copy; 2019 <a href="https://globalnine-indonesia.com">PT. Globalnine Indonesia</a>. </strong> All rights
    reserved.
        </div>
      </div>
    </section>
  </div>
  <?php include '_base/footer-nama.php'; ?>
</div>
<?php include '_base/footer.php' ;?>
<script src="_base/pace.min.js"></script>
<script type="text/javascript">
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: '#', success: function (result) {
        $('.ajax-content').html('<hr>Ooppssss.........!!!!! maaf silahkan kembali still under development from the program developer. please refresh then continue according to the rules')
      }
    })
  })
</script>
