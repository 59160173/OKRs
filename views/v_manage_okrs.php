<script type="text/javascript">
	 $(function () {
     $("input").addClass('form-control');
    $('#okrs').DataTable()
 	 })
</script>
<script type="text/javascript">
	$(document).ready(function(){
	   $("input").addClass('form-control');
       $("select").addClass('form-control');
       $("option").addClass('form-control');

    $(".info").click(function(){
            $("#infomodal").modal('show');
        });

		$("#add").click(function(){
            $("#addmodal").modal('show');
        });
    $(".edit").click(function(){
            $("#editmodal").modal('show');
           
        });
    $("#count").change(function(){
       $("input").addClass('form-control');
      var count = $("#count").val();
      var kr=1;
      var num = 1;
      $(".kr").remove();
      $(".krtext").remove();
      $(".opt").remove();
      $(".opttext").remove();
      $(".goal").remove();
      $(".goaltext").remove();
      $(".unit").remove();
      $(".unittext").remove();
      $(".seq").remove();
      $(".tab").remove();
      for(i=0;i<count;i++){

        $("#ckr").append('<h4 class="seq col-md-12">'+
                          '<center>'
                          +'แนวทางการผลักดันเป้าหมายตัวที่'+
                          ' ' 
                          +num+
                          '</h4><label class="krtext">key resuls</label>'+
                          '</center>'+
                          '<input type="" class="kr form-control">'+
                          '<label class="opttext">ตัวดำเนินการ</label>'+
                          '<select class="unit  form-control">'+
                          ' <option value ="" disabled selected>โปรดเลือก</option>'+
                          '<option value="มากกว่า">มากกว่า (>)</option>'+
                          '<option value="น้อยกว่า">น้อยกว่า (<)</option>'+
                          '<option value="น้อยกว่าเท่ากับ">น้อยกว่าเท่ากับ (<=)</option>'+
                          '<option value="มากกว่าเท่ากับ">มากกว่าเท่ากับ (>=)</option>'+
                          '<option value="เท่ากับ">เท่ากับ (=)</option>'+
                          '</select>'+
                          '<br class="tab">'+
                          '<label class="goaltext ">เป้าหมาย</label><input type="number" class="goal form-control" >'+
                          '<label class="unittext  ">หน่วย</label>'+
                          ' '+
                          '<select class="unit  form-control">'+
                          '<option value="test1">1</option>'+
                          '<option value="test2">2</option>'+
                          '</select>'+
                          ' ');
        num++;
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
          <div class="box box-solid box-primary">
            <div class="box-header with-border">
             	<h3 class="box-title" >การจัดการเป้าหมาย Objective Key and Results</h3>
             </div>
            
            <!-- /.box-header -->
           	<form class="form-horizontal" method="post" action="">
            	<div class="box-body" >
            		<br>
            			<span class="col-md-3 pull-left">
            				<button id="add" type="button" class="btn btn-block btn-info ">Add Objective</button>
            			</span><br><br>
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
            							<td><button type="button" name="edit" class=" edit btn btn btn-warning"><i class="glyphicon glyphicon-pencil" style="color:white"></i></button>
            								<button id="del" name="del" class="btn btn-danger"><i class="glyphicon glyphicon-trash" style="color:white"></i></button>
            								<button type="button" name="info" class="info btn btn-info"><i class="glyphicon glyphicon-info-sign" style="color:white"></i></button>

            							</td>
            						</tr>
            						</table>
            					</div>
            		
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
       <!-- Modal edit-->
      <div class="modal fade" id="editmodal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content ">
            <div class="modal-header bg-yellow color-palette">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit Objective</h4>
            </div>
             <div class="col-md-12">
              <div class="modal-body col-md-12">
                <div class="form-group col-md-12">
                       <label>Ojective</label>
                       <input type="" name="obj" id="obj">
                   </div>
                   <div class="form-group col-md-12">
                       <label for="level" >level</label>
                       <input disabled="" type="number" name="level" id="level">
                   </div>
                   <div class="form-group col-md-6">
                       <label for="datestr" >วันที่เริ่ม</label>
                       <input type="date" name="date-str" id="date-str">
                   </div>
                   <div class="form-group col-md-6">
                       <label for="dateend" >วันที่สิ้นสุด</label>
                       <input type="date" name="dateend" id="dateend">
                   </div>
                   
                    <div class="form-group col-md-3">
                       <label for="date-str-ass" >วันที่เริ่มประเมิน</label>
                       <input type="date" name="date-str-ass" id="date-str-ass">
                   </div>
                   <div class="form-group col-md-3">
                       <label for="date-end-ass" >วันที่สิ้นสุดประเมิน</label>
                       <input type="date" name="date-end-ass" id="date-end-ass">
                   </div>
                    <div class="form-group col-md-6">
                       <label for="name" >ผู้รับผิดชอบ</label>
                       <input type="" name="name" id="name">
                   </div>
                   <div class="form-group col-md-6">
                      <label for="name" >Key results</label>
             
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

       <!-- Modal add-->
      <div class="modal fade" id="addmodal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content ">
            <div class="modal-header bg-light-blue color-palette">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Objective</h4>
            </div>
                   <div class="col-md-12">
                    <div class="modal-body col-md-12">
                      <div class="form-group col-md-12">
                             <label>Ojective</label>
                             <input type="" name="obj" id="obj">
                         </div>
                         <div class="form-group col-md-12">
                             <label for="level" >level</label>
                             <input disabled="" type="number" name="level" id="level">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="datestr" >วันที่เริ่ม</label>
                             <input type="date" name="date-str" id="date-str">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="dateend" >วันที่สิ้นสุด</label>
                             <input type="date" name="dateend" id="dateend">
                         </div>
                         
                          <div class="form-group col-md-3">
                             <label for="date-str-ass" >วันที่เริ่มประเมิน</label>
                             <input type="date" name="date-str-ass" id="date-str-ass">
                         </div>
                         <div class="form-group col-md-3">
                             <label for="date-end-ass" >วันที่สิ้นสุดประเมิน</label>
                             <input type="date" name="date-end-ass" id="date-end-ass">
                         </div>
                          <div class="form-group col-md-6">
                             <label for="name" >ผู้รับผิดชอบ</label>
                             <input type="" name="name" id="name">
                         </div>
                         <div class="form-group col-md-12">
                            <label for="name" >จำนวนแนวทางการผลักดันเป้าหมาย (Key results)</label>
                         </div>
                         <div class="form-group col-md-12">
                              <select id="count">
                                <option value ="0" disabled selected>โปรดเลือก</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                              </select>
                        </div>
                      <div id="ckr" class="form-group col-md-12">
                        
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

       <!--info Modal -->
      <div class="modal fade" id="infomodal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-light-blue color-palette">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">รายละเอียด Objective and Key Results</h4>
            </div>
            <div class="modal-body">
              <p>This is a large modal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


</div>