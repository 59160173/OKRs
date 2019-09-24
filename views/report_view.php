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
        <div class="box box-solid box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> <i class="fa fa-newspaper-o"></i> Data Report</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                      <div class="row">
                      <div class="col-sm-6">
                          <div class="dataTables_length" id="example1_length">
                            </div>
                      </div>
                      <div class="col-sm-6">
                          <div id="example1_filter" class="dataTables_filter">
                          </div>
                      </div>
                      </div>
                      <div class="row"><div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-
                               describedby="example1_info">
                      <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 40px;" ><center>ลำดับ
                            </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 400px;"><center>Object
                            </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 170px;"><center>สถานะการบันทึกผล
                            </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 170px;"><center>ผลการประเมิน
                            </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 126px;"><center>บันทึกผล
                            </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 126px;"><center>ประเมินผล
                            </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 126px;"><center>รายละเอียด
                            </th>
                    </tr>
                    </thead>
                    <tbody><center>
                   <tr role="row" class="odd">
                      <td class="sorting_1">1</td>
                      <td>จัดทำ Website เพื่อสนับสนุนการขาย</td>
                      <td class="text-red">ยังไม่ดำเนินการ</td>
                      <td class="text-yellow">อยู่ในระหว่างการประเมิน</td>
                      <td><center>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-save">
                        <i class="fa fa-save"></i>
                        </button>
                      </td>
                      <td><center>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-evalution">
                        <i class="fa fa-edit"></i>
                        </button>
                      </td>
                      <td><center>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-exclamation">
                        <i class="fa fa-exclamation-circle"></i>
                        </button>
                      </td>
                    </tr>
                    <tr role="row" class="odd">
                      <td class="sorting_1">2</td>
                      <td>พัฒนาตัวเองเพื่อให้ทำธุรกิจได้ดีขึ้น</td>
                      <td class="text-yellow">กำลังดำเนินการ</td>
                      <td class="text-yellow">อยู่ในระหว่างการประเมิน</td>
                      <td><center>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-save">
                        <i class="fa fa-save"></i>
                        </button>
                      </td>
                      <td><center>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-evalution">
                        <i class="fa fa-edit"></i>
                        </button>
                      </td>
                      <td><center>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-exclamation">
                        <i class="fa fa-exclamation-circle"></i>
                        </button>
                      </td>
                    </tr>
                    <tr role="row" class="odd">
                      <td class="sorting_1">3</td>
                      <td>ต้องการสร้างเงินให้กับเจ้าของบริษัท</td>
                      <td class="text-green">เสร็จสิ้น</td>
                      <td class="text-green">ผ่าน</td>
                      <td><center>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-save">
                        <i class="fa fa-save"></i>
                        </button>
                      </td>
                      <td><center>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-evalution">
                        <i class="fa fa-edit"></i>
                        </button>
                      </td>
                      <td><center>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-exclamation">
                        <i class="fa fa-exclamation-circle"></i>
                        </button>
                      </td>
                    </tr>
                        </center>
                    </tbody>

                  </table></div></div>
                      <div class="row">
                          <div class="col-sm-5"></div>
                          <div class="col-sm-7">
                              <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                  <ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"></ul>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
                <!-- /.box-body -->

        </div>
    </section>
   </div>
  <!-- /.ปุ่มบันทึกผล-->
  <div class="modal fade" id="modal-save" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-aqua color-palette">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title"> <i class="fa fa-save"> </i>  บันทึกผล</h4>
              </div>
                 
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputObj" class="col-sm-2 control-label">Objective</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputKeyr" class="col-sm-2 control-label"> Key result </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                  
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputGoal" class="col-sm-2 control-label">เป้าหมาย</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputStatus" class="col-sm-2 control-label">การดำเนินงาน</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                       </div>
                     
                       <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-7">
                   
                      <label>
                        <tr> <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">	 
                            <span class="label label-danger">ยังไม่ดำเนินการ</span></tr> 
                      </label>    
                  </div>
                  <div class="col-sm-offset-3 col-sm-7">
                      <label><tr><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> <span class="label label-warning">กำลังดำเนินการ</span></tr></label>
                  </div>
                    <div class="col-sm-offset-3 col-sm-7">
                        <label><tr><input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> <span class="label label-success">เสร็จสิ้น</span></tr> </label>
                  </div>
                      </div>  
                </div>
                  <div class="form-group">
                  <label for="inputAssess" class="col-sm-2 control-label">ผลการประเมิน</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                </div>
                  </div>
                </div>
                
              </div>
             
            </form>
         
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-success">บันทึก</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>




<!-- /.ปุ่มประเมินผล-->
 <div class="modal fade" id="modal-evalution" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-aqua color-palette">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title"> <i class="fa fa-edit"> </i>  ประเมินผล</h4>
              </div>
                
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputObj" class="col-sm-2 control-label">Objective</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputKeyr" class="col-sm-2 control-label"> Key result </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                  
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputGoal" class="col-sm-2 control-label">เป้าหมาย</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPort" class="col-sm-2 control-label">ผลงาน</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputAssess" class="col-sm-2 control-label">ผลการประเมิน</label>
                  <div class="col-sm-10">
                        <label><tr><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" > <span class="label label-success">ผ่าน</span></tr> </label>
                        <label><tr><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" >  <span class="label label-warning">อยู่ในระหว่างการประเมิน</span></tr></label>  
                      
                  </div>
                     </div> 
                    <div class="form-group">
                  <label for="inputDaystart" class="col-sm-2 control-label">วันที่เริ่ม</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                  </div>
                 </div> 
                
                
              </div>
             
            </form>
         
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-success">บันทึก</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<!-- /.ปุ่มรายละเอียด-->
 <div class="modal fade" id="modal-exclamation" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-aqua color-palette">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title"> <i class="fa fa-exclamation-circle"> </i>  รายละเอียด</h4>
              </div>
              <div class="modal-body">
                <p>One fine body…</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>