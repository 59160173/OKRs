<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
        <div class="box box-solid box-info">
                <div class="box-header with-border bg-aqua-active color-palette">
                  <h3 class="box-title"> <i class="fa fa-bar-chart"></i>  Dashboard</h3>
                </div>
            
                <!-- /.box-header -->
            <div class="col-md-6">
                <div class="box box-danger ">
            <div class="box-header with-border">
              <h3 class="box-title">Donut Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height: 168px; width: 337px;" height="336" width="674"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
           </div>
                <!-- /.box-body -->

        </div>
    </section>
   </div>
  