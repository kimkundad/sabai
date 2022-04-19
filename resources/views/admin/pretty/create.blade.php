@extends('admin.layouts.template')


@section('admin.stylesheet')
<link href="{{URL::asset('assets/upload_image/css/fileinput.css')}}" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

<style>
    .note-editor.note-frame .note-editing-area .note-editable {
    padding: 10px;
    overflow: auto;
    color: #000;
    word-wrap: break-word;
    background-color: #bdb7b7;
}
</style>
@stop('admin.stylesheet')
@section('admin.content')






        <section role="main" class="content-body">

          <header class="page-header">
            <h2>เพิ่ม Pretty</h2>

            <div class="right-wrapper pull-right">
              <ol class="breadcrumbs">
                <li>
                  <a href="{{url('admin/dashboard')}}">
                    <i class="fa fa-home"></i>
                  </a>
                </li>

                <li><span>เพิ่ม Pretty</span></li>
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

          						    <h4 class="mb-xlg">เพิ่ม Pretty</h4>

          							<fieldset>
                                    <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">ชื่อพริตตี้*</label>
          									<div class="col-md-8">
          										<input type="text" class="form-control" name="name" value="{{ old('name') }}">
          									</div>
          							</div>
                                    <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">เบอร์มือถือ*</label>
          									<div class="col-md-8">
          										<input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
          									</div>
          							</div>
									 
                                      
                                    <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">line id*</label>
          									<div class="col-md-8">
          										<input type="text" class="form-control" name="line" value="{{ old('line') }}">
          									</div>
          							</div>
                                      <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">แนะนำพริตตี้*</label>
          									<div class="col-md-8">
          										<input type="text" class="form-control" name="title" value="{{ old('title') }}">
          									</div>
          							</div>

									  <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">เวลา Live*</label>
          									<div class="col-md-8">
          										<input type="text" class="form-control" name="time" value="{{ old('time') }}">
          									</div>
          							</div>

									  <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">วัน Live*</label>
          									<div class="col-md-8">
											    <div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input type="text" name="live_date" data-plugin-datepicker data-date-format="yyyy-mm-dd" class="form-control">
												</div>
          									</div>
          							</div>

                                      <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">live_url*</label>
          									<div class="col-md-8">
                                              <input type="text" class="form-control" name="stream_url" value="{{ old('stream_url') }}">
          									</div>
          							</div>

                                      <div class="form-group">
          								<label class="col-md-3 control-label" for="profileFirstName">เปิดไลฟ์</label>
          									<div class="col-md-8">
											  <select name="live_status" class="form-control mb-md" required>
                                              <option value="0">-- ปิด --</option>
                                              <option value="1">-- เปิด --</option>
											  </select>
          									</div>
          							</div>


                                      <div class="form-group">
                                    <label class="col-md-3 control-label" for="exampleInputEmail1">รูปแนวตั้ง*</label>
                                    <div class="col-md-8">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                  														<div class="input-append">
                  															<div class="uneditable-input">
                  																<i class="fa fa-file fileupload-exists"></i>
                  																<span class="fileupload-preview"></span>
                  															</div>
                  															<span class="btn btn-default btn-file">
                  																<span class="fileupload-exists">Change</span>
                  																<span class="fileupload-new">Select file</span>
                  																<input type="file" name="image_x">
                  															</span>
                  															<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                  														</div>
                  													</div>
                                            </div>
                                  </div>


                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="exampleInputEmail1">รูปแนวนอน*</label>
                                    <div class="col-md-8">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                  														<div class="input-append">
                  															<div class="uneditable-input">
                  																<i class="fa fa-file fileupload-exists"></i>
                  																<span class="fileupload-preview"></span>
                  															</div>
                  															<span class="btn btn-default btn-file">
                  																<span class="fileupload-exists">Change</span>
                  																<span class="fileupload-new">Select file</span>
                  																<input type="file" name="image_y">
                  															</span>
                  															<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                  														</div>
                  													</div>
                                            </div>
                                  </div>


                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="exampleInputEmail1">วิดีโอ แแนะนำ*</label>
                                    <div class="col-md-8">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                  														<div class="input-append">
                  															<div class="uneditable-input">
                  																<i class="fa fa-file fileupload-exists"></i>
                  																<span class="fileupload-preview"></span>
                  															</div>
                  															<span class="btn btn-default btn-file">
                  																<span class="fileupload-exists">Change</span>
                  																<span class="fileupload-new">Select file</span>
                  																<input type="file" name="video">
                  															</span>
                  															<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                  														</div>
                  													</div>
                                            </div>
                                  </div>

                                      <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">Tag*</label>
          													<div class="col-md-9">
                                   
                                      <textarea class="form-control" name="tag" rows="4">{{ old('tag') }}</textarea>
          													</div>
          												</div>



                                                          <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">คำอธิบาย*</label>
          													<div class="col-md-9">
                                      <textarea class="form-control" id="summernote" name="detail" rows="9">{{ old('detail') }}</textarea>
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
<script src="{{URL::asset('assets/upload_image/js/fileinput.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>

	
$('#summernote, #summernote2').summernote({
    toolbar: [
      // [groupName, [list of button]]
      ['style', ['bold', 'italic', 'underline', 'clear']],
      ['font', ['strikethrough', 'superscript', 'subscript']],
      ['fontsize', ['fontsize']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']]
    ],
    placeholder: 'Hello bootstrap 4',
    tabsize: 2,
    height: 350
  });
  </script>

@stop('scripts')
