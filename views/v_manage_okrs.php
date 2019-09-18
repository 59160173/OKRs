<script type="text/javascript">
	 $(function () {
    $('#okrs').DataTable()
 	 })
</script>
<script type="text/javascript">
	$(document).ready(function(){
	    $("input").addClass('form-control');
		$("#add").click(function(){
            $("#addmodal").modal('show');
        });
        $("#count").change(function(){
        	var count = $("#count").val();
        	var i = 1;
   			if(count == 2){
   				$("#num").append('<input type="" name="kr" id="kr" value=""><br>');
   			}else if(count == 3){
   				$("#num").append('"<input type="" name="kr" id="kr" value="">"<br>');
   			}
  		});

	});
</script>

<style type="text/css">
	tr{
		text-align: center;
	}
	th{
		text-align: center;
	}
</style>
<!-- Content Wrapper. Contains page content -->
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
          <div class="box">
            <div class="box-header with-border">
             	<h3 class="box-title" >การจัดการเป้าหมาย Objective Key and Results</h3>
             </div>
            
            <!-- /.box-header -->
           	<form class="form-horizontal">
            	<div class="box-body" >
            		<br>
            			<span class="col-md-3 pull-left">
            				<button id="add" type="button" class="btn btn-block btn-info ">Add Objective</button>
            			</span><br><br>
            				<div>
            				<div>
            					<div><table id="okrs" class="table table-bordered table-hover dataTable" role="grid">
            						<thead>
            						<tr>
            							<th>ลำดับ</th>
            							<th>Objective</th>
            							<th>ระดับ</th>
            							<th>ดำเนินการ</th>
            						</tr>
            						</thead>
            						<tr>
            							<td>1</td>
            							<td>1</td>
            							<td>1</td>
            							<td><button id="edit" class="btn btn btn-warning"><i class="glyphicon glyphicon-pencil" style="color:white"></i></button>
            								<button id="del" name="del" class="btn btn-danger"><i class="glyphicon glyphicon-trash" style="color:white"></i></button>
            								<button id="info" name="info" class="btn btn-info"><i class="glyphicon glyphicon-info-sign" style="color:white"></i></button>

            							</td>
            						</tr>
            					</table>
            				</div>
            				
            		</div>
           	   	
           	</form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </section>
       <!-- Modal -->
		  <div class="modal fade" id="addmodal" role="dialog">
		    <div class="modal-dialog modal-lg">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Add Objective</h4>
		        </div>
		         <div class="col-md-12">
			        <div class="modal-body col-md-12">
			         	<div class="form-group">
	               			 <label>Ojective</label>
	               			 <input type="" name="obj" id="obj">
	           			 </div>
	           			 <div class="form-group">
	               			 <label for="level" >level</label>
	               			 <input disabled="" type="number" name="level" id="level">
	           			 </div>
	           			 <div class="form-group">
	               			 <label for="datestr" >วันที่เริ่ม</label>
	               			 <input type="date" name="date-str" id="date-str">
	           			 </div>
	           			 <div class="form-group">
	               			 <label for="dateend" >วันที่สิ้นสุด</label>
	               			 <input type="date" name="dateend" id="dateend">
	           			 </div>
	           			 
	           			  <div class="form-group">
	               			 <label for="date-str-ass" >วันที่เริ่มประเมิน</label>
	               			 <input type="date" name="date-str-ass" id="date-str-ass">
	           			 </div>
	           			 <div class="form-group">
	               			 <label for="date-end-ass" >วันที่สิ้นสุดประเมิน</label>
	               			 <input type="date" name="date-end-ass" id="date-end-ass">
	           			 </div>
	           			  <div class="form-group">
	               			 <label for="name" >ผู้รับผิดชอบ</label>
	               			 <input type="" name="name" id="name">
	           			 </div>
	           			 <div class="form-group">
	               			<label for="name" >Key results</label>
							<select id="count">
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							</select>
	           			 </div>
	           			 <div id="num">
	           			 	<input type="" name="kr" id="kr" value=""><br>
	           			 </div>
	           			
			        </div>
			    </div>
		        <div class="modal-footer">
		          <button type="submit" class="btn btn-success" data-dismiss="modal">บันทึก</button>
		          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
		        </div>
		      </div>
		    </div>
		  </div>


</div>