@extends('admin.layouts.template')
@section('admin.content')






        <section role="main" class="content-body">

          <header class="page-header">
            <h2>รายชื่อ Pretty ทั้งหมด</h2>

            <div class="right-wrapper pull-right">
              <ol class="breadcrumbs">
                <li>
                  <a href="{{url('admin/user')}}">
                    <i class="fa fa-home"></i>
                  </a>
                </li>

                <li><span>รายชื่อ Pretty ทั้งหมด</span></li>
              </ol>

              <a class="sidebar-right-toggle" data-open="sidebar-right" ><i class="fa fa-chevron-left"></i></a>
            </div>
          </header>


          <!-- start: page -->



<div class="row">
              <div class="row">
              <div class="col-xs-12">

            <section class="panel">
              <header class="panel-heading">
                <div class="panel-actions">
                  <a href="#"  class="panel-action panel-action-toggle" data-panel-toggle></a>

                </div>

                <h2 class="panel-title">รายชื่อ Pretty ทั้งหมด</h2>
              </header>
              <div class="panel-body">


              <a class="btn btn-primary " href="{{url('admin/pretty/create')}}" >
                      <i class="fa fa-plus"></i> เพิ่ม Pretty</a>
                      <br><br>

                <table class="table table-striped" >
                  <thead>
                    <tr>
                      <th>Pretty</th>
                      <th>เบอร์มือถือ</th>
                      <th>Live</th>
                      <th>สถานะ</th>
                      <th>วันที่สมัคร</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
             @if($objs)
                @foreach($objs as $u)
                    <tr access_id="{{$u->id}}">
                      
                      <td>
                      <img src="{{url('assets/pretty/'.$u->image_x)}}" alt="{{$u->name}}" style="height:150px;" >

                        {{$u->name}} </td>
                      <td>{{$u->phone}}</td>
                      <td>{{$u->live_date}}</td>
                      <td>
                        <div class="switch switch-sm switch-success">
                          <input type="checkbox" name="switch" data-plugin-ios-switch
                          @if($u->status == 1)
                          checked="checked"
                          @endif
                          />
                        </div>
                      </td>
                      <td id="{{ $day = date('n', strtotime($u->created_at))}}">{{$u->created_at}}</td>
                      <td>
                        <div class="btn-group flex-wrap">
                        <button type="button" class="mb-1 mt-1 mr-1 btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">จัดการ <span class="caret"></span></button>

                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item text-1" href="{{ url('admin/pretty/'.$u->id.'/edit') }}">แก้ไขข้อมูล</a>
                          <a class="dropdown-item text-1 text-danger" href="{{ url('api/del_pretty/'.$u->id) }}">ลบข้อมูล</a>

                        </div>



                      </div>
                      </td>
                    </tr>
                 @endforeach
              @endif

                  </tbody>
                </table>
                {{ $objs->links() }}
              </div>
            </section>

              </div>
            </div>
        </div>
</section>
@stop



@section('scripts')

<script>

$(document).ready(function(){
  $("input:checkbox").change(function() {

	var course_id = $(this).closest('tr').attr('access_id');

	console.log('fea : '+course_id);
	$.ajax({
					type:'POST',
					url:'{{url('api/post_status_pretty')}}',
					headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
					data: { "user_id" : course_id },
					success: function(data){
						if(data.data.success){


                            var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
                      var notice = new PNotify({
                            title: 'ทำรายการสำเร็จ',
                            text: 'คุณเปลี่ยนการแสดงผล สำเร็จเรียบร้อยแล้วค่ะ',
                            type: 'success',
                            addclass: 'stack-topright'
                          });



						}
					}
			});
	});

  	});

</script>

@stop('scripts')
