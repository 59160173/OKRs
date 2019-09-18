<!DOCTYPE html>
<html>
<head>
	<title>Manage data</title>
 
	
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 
  <script>


    $(document).ready(function(){
     $('#okr').DataTable();
      
    });
    $(document).ready(function(){
      $("input").addClass('form-control');
        $(".edit").click(function(){
          var code = $(this).attr('data-code');
          var obj_name = $(this).attr('data-obj_name');
          var level = $(this).attr('data-level');
          var info = $(this).attr('data-info');
         
          $('#code').val(code)
          $('#obj_name').val(obj_name)
          $('#level').val(level)
          $('#info').val(info)
          
          $('#editm').modal('show');
        });
          $(".add").click(function(){
            $("#addm").modal('show');
        });
      });
  </script>
  <script type="text/javascript">
    
    function Checkfrm(){
      if(frm1.obj_name.value==""){
        alert('กรุณากรอกชื่อ');
        frm1.obj_name.focus()
        return false
      }else if(frm1.level.value==""){
        alert('กรุณากรอกระดับ');
        frm1.level.focus()
        return false;        
      }
    }
  </script>
   
</head>
<body>
 
	<div class="container">
  		<h1>Object and Key Result</h1>
  		<div class="panel panel-default">
    		<div class="panel-body">ตารางจัดการข้อมูล</div>
    				<div class="panel panel-default">
    					<div class="panel-body">
    						<button class="btn btn-default btn-primary add"  >+ Add Data</button>
                <br>
                 <br>
    						<table id="okr" border="2">
                  <thead>
    							<tr>
    								<th>Sequen</th>
                    <th>Code</th>
    								<th>objective</th>
    								<th>Lv</th>
                    <th>infomation</th>
    								<th>Button</th>
    							</tr>
                  </thead>
                  <?php $num=1; foreach($query AS $row):?>
    							<tr>

    								<td><?php echo $num++; ?></td>
    								<td><?php echo $row->code; ?></td>
    								<td><?php echo $row->obj_name; ?></td>
                    <td><?php echo $row->level; ?></td>
                    <td><?php echo $row->info; ?></td>
    								<td>
    									<button class="edit btn btn-warning" data-code="<?php echo $row->code; ?>"
                                                           data-obj_name="<?php echo $row->obj_name; ?>"
                                                           data-level="<?php echo $row->level; ?>"
                                                           data-info="<?php echo $row->info; ?>"
                                                    
                                                           >Edit</button>
    								  <button class="del btn btn-danger"  onclick="window.location.href='http://localhost/ci/index.php/Manage/deleteokrs/<?php echo $row->code  ?>'" 
                                                    
                                                           >Delete</button>
    									<button class="info btn btn-info">i</button>
    								</td>
    							</tr>
               <?php endforeach;  ?>
              </table>
    					</div>
  					</div>
  		</div>
	</div>
  <!-- edit model!-->
     <div class="modal fade" id="editm" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <form action="http://localhost/ci/index.php/Manage/edit_okrs" method="post" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <input type="hidden" name="code" id="code" >
            </div>  
            <div class="form-group">
                <label for="obj_name" >Objective</label>
                <input type="" name="obj_name" id="obj_name">
            </div>  
            <div class="form-group">
                <label for="level" >level</label>
                <input type="" name="level" id="level">
            </div>
            <div class="form-group">
                <label for="info" >info</label>
                <input type="" name="info" id="info">
            </div>
               
        </div>
        <div class="modal-footer">
           <button class="btn btn-success" type="submit" name="submit" id="sub">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <!-- end edit model!-->

  <!-- add model!-->
     <div class="modal fade" id="addm" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form  name="frm1"  action="http://localhost/ci/index.php/Manage/add_Okrs" method="post" onsubmit="return Checkfrm()">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <input type="hidden" name="code" id="code" >
            </div>  
            <div class="form-group">
                <label for="obj_name" >Objective</label>
                <input type="" name="obj_name" id="obj_name">
            </div>  
            <div class="form-group">
                <label for="level" >level</label>
                <input type="" name="level" id="level">
            </div>
            <div class="form-group">
                <label for="info" >info</label>
                <input type="" name="info" id="info">
            </div>
               
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" type="submit" name="submit" id="sub">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end add model!-->
  <!-- delete model!-->
 <!--  <div class="modal fade" id="delm" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="http://localhost/ci/index.php/Manage/deleteokrs/<?php echo $row->code  ?>" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
             <div class="form-group">
                <input type="" name="code" id="code" value="">
            </div>  
        <div class="modal-footer">
          <input class="btn-default" type="submit" name="submit" id="sub">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
       
      </div>
    </div>
  </form>
  </div>
</div>
  <!-- end delete model!-->
</body>
</html>