@extends('admin.layouts.template')
@section('admin.content')






        <section role="main" class="content-body">

          <header class="page-header">
            <h2>รายชื่อผู้ใช้งาน</h2>

            <div class="right-wrapper pull-right">
              <ol class="breadcrumbs">
                <li>
                  <a href="{{url('admin/user')}}">
                    <i class="fa fa-home"></i>
                  </a>
                </li>

                <li><span>รายชื่อผู้ใช้งาน</span></li>
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

                <h2 class="panel-title">รายชื่อผู้ใช้งาน</h2>
              </header>
              <div class="panel-body">


              <a class="btn btn-primary " href="{{url('admin/user/create')}}" >
                      <i class="fa fa-plus"></i> เพิ่มผู้ใช้งาน</a>
                      <br><br>

                <table class="table table-striped" >
                  <thead>
                    <tr>
                      <th>#ID</th>
                      <th>ชื่อผู้ใช้งาน</th>
                      <th>เบอร์มือถือ</th>
                      <th>เครดิต</th>
                      <th>วันหมดอายุ</th>
                      <th>วันที่สมัคร</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
             @if($objs)
                @foreach($objs as $u)
                    <tr>
                      <td>{{$u->id}}</td>
                      <td>
                      <img src="{{url('assets/img/avatar/'.$u->avatar)}}" alt="{{$u->name}}" style="height:32px;" class="img-circle">

                        {{$u->fname}}  {{$u->lname}}</td>
                      <td>{{$u->phone}}</td>
                      <td>{{$u->point}}</td>
                      <td>{{$u->endday}}</td>
                      <td id="{{ $day = date('n', strtotime($u->created_at))}}">{{$u->created_at}}</td>
                      <td>
                        <div class="btn-group flex-wrap">
                        <button type="button" class="mb-1 mt-1 mr-1 btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">จัดการ <span class="caret"></span></button>

                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item text-1" href="{{ url('admin/user/'.$u->id.'/edit') }}">แก้ไขข้อมูล</a>
                          <a class="dropdown-item text-1 text-danger" href="{{ url('api/del_user/'.$u->id) }}">ลบข้อมูล</a>

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
