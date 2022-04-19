@extends('admin.layouts.template')
@section('admin.content')






        <section role="main" class="content-body">

          <header class="page-header">
            <h2>เห็นเราจากที่ไหน</h2>

            <div class="right-wrapper pull-right">
              <ol class="breadcrumbs">
                <li>
                  <a href="{{url('admin/user')}}">
                    <i class="fa fa-home"></i>
                  </a>
                </li>

                <li><span>เห็นเราจากที่ไหน</span></li>
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

                <h2 class="panel-title">เห็นเราจากที่ไหน</h2>
              </header>
              <div class="panel-body">


              <a class="btn btn-primary " href="{{url('admin/ban_position/create')}}" >
                      <i class="fa fa-plus"></i> เพิ่มเห็นเราจากที่ไหน</a>
                      <br><br>

                <table class="table table-striped" >
                  <thead>
                    <tr>
                      <th>ชื่อผู้ใช้งาน</th>
                      <th>วันที่สร้าง</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
             @if($objs)
                @foreach($objs as $u)
                    <tr>
                      <td>{{$u->position}}</td>
                      <td>{{$u->created_at}}</td>
                      <td>
                        <div class="btn-group flex-wrap">
                            <button type="button" class="mb-1 mt-1 mr-1 btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">จัดการ <span class="caret"></span></button>

                            <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item text-1" href="{{ url('admin/ban_position/'.$u->id.'/edit') }}">แก้ไขข้อมูล</a>
                            <a class="dropdown-item text-1 text-danger" href="{{ url('api/del_position/'.$u->id) }}" onclick="return confirm('Are you sure?')">ลบข้อมูล</a>
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



@stop('scripts')
