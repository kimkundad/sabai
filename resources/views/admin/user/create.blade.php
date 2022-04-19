@extends('admin.layouts.template')





@section('admin.content')






        <section role="main" class="content-body">

          <header class="page-header">
            <h2>เพิ่มรายชื่อผู้ใช้งาน</h2>

            <div class="right-wrapper pull-right">
              <ol class="breadcrumbs">
                <li>
                  <a href="{{url('admin/dashboard')}}">
                    <i class="fa fa-home"></i>
                  </a>
                </li>

                <li><span>เพิ่มรายชื่อผู้ใช้งาน</span></li>
              </ol>

              <a class="sidebar-right-toggle" data-open="sidebar-right" ><i class="fa fa-chevron-left"></i></a>
            </div>
          </header>


          <!-- start: page -->



          <div class="row">
          							<div class="col-md-2 col-lg-2">




          							</div>







                        <div class="col-md-8 col-lg-8">

          							<div class="tabs">

          								<div class="tab-content">

          									<div id="edit" class="tab-pane active">


                              <form  method="POST" action="{{$url}}" enctype="multipart/form-data">
                                    {{ method_field($method) }}
                                    {{ csrf_field() }}

          						    <h4 class="mb-xlg">เพิ่มรายชื่อผู้ใช้งาน</h4>

          							<fieldset>
                                    <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">ชื่อจริง*</label>
          									<div class="col-md-8">
          										<input type="text" class="form-control" name="fname" value="{{ old('fname') }}">
          									</div>
          							</div>
                                    <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">นามสกุล*</label>
          									<div class="col-md-8">
          										<input type="text" class="form-control" name="lname" value="{{ old('lname') }}">
          									</div>
          							</div>
									  <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">เห็นเราจากที่ไหน</label>
          									<div class="col-md-8">
											  <select name="fav" class="form-control mb-md" required>

													<option value="">-- เลือกเห็นเราจากที่ไหน --</option>
													@foreach($posi as $objs)
													<option value="{{$objs->id}}"
													>{{$objs->position}}</option>
													@endforeach
													</select>
          									</div>
          							</div>
                                    <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">หมายเลขมือถือ*</label>
          									<div class="col-md-8">
          										<input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
          									</div>
          							</div>
                                      <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">เครดิต*</label>
          									<div class="col-md-8">
          										<input type="text" class="form-control" name="point" value="0">
          									</div>
          							</div>

									  <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">วันหมดอายุ*</label>
          									<div class="col-md-8">
											    <div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input type="text" name="endday" data-plugin-datepicker data-date-format="yyyy-mm-dd" class="form-control">
												</div>
          									</div>
          							</div>

                                      <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">รหัสผ่าน ( 8 ตัวขึ้นไป )*</label>
          									<div class="col-md-8">
          										<input type="text" class="form-control" name="password" value="{{ $pass }}">
          									</div>
          							</div>
          							</fieldset>







          											<div class="panel-footer">
          												<div class="row">
          													<div class="col-md-9 col-md-offset-3">
          														<button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
          														<button type="reset" class="btn btn-default">ยกเลิก</button>
          													</div>
          												</div>
          											</div>

          										</form>

          									</div>
          								</div>
          							</div>
          						</div>









          						</div>




</section>
@stop



@section('scripts')
<script src="{{asset('/assets/javascripts/tables/examples.datatables.default.js')}}"></script>




@stop('scripts')
