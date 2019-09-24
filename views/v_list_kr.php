

<script type="text/javascript">
	 $(function () {
     $("input").addClass('form-control');
    $('#reportokrs').DataTable()
 	 })
</script><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
        <!--<li class="active">Dashboard</li>-->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
    

      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">ตารางรายงาน Key results</h3>
            </div>
             <!-- /.box-header -->
           		<form class="form-horizontal" method="post" action="">
            		<div class="box-body" >
            			<table id="reportokrs" class="table table-bordered table-hover dataTable" role="grid">
            				<thead>
            					<tr>
            						<th>ลำดับ</th>
            						<th>ว/ด/ป</th>
            						<th>Objective</th>
            						<th>เป้าหมาย</th>
            						<th>ผลการประเมิน</th>
            					</tr>
            				</thead>
            				<tr>
            					<td>1</td>
            					<td>test</td>
            					<td>test</td>
            					<td>test</td>
            					<td><span class="label label-success">ผ่าน</span></td>
            				</tr>
            				<tr>
            					<td>2</td>
            					<td>test</td>
            					<td>test</td>
            					<td>test</td>
            					<td><span class="label label-danger">ไม่ผ่าน</span></td>
            				</tr>
            				<tr>
            					<td>3</td>
            					<td>test</td>
            					<td>test</td>
            					<td>test</td>
            					<td><span class="label label-warning">รอดำเนินการ</span></td>
            				</tr>
            			</table>


              		</div>
              	</form>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </section>
</div>