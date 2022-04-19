@extends('layouts.template')

@section('ga')
window.gaTitle = 'เข้าสู่ระบบ';
@endsection

@section('stylesheet')

<style>
    #titlebar {
    background-color: #00012b;
    position: relative;
    padding: 70px 0;
    margin-bottom: 65px;
}
.sign-in-form label {
    position: relative;
    color: #d5d5d5;
    font-size: 15px;
}
.lost_password a {
    margin: 0;
    color: #bfbfbf;
    font-size: 15px;
}
</style>

@stop('stylesheet')

@section('content')

<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				

			</div>
		</div>
	</div>
</div>

<div class="clearfix"></div>
<!-- Map Container / End -->

<!-- Container / Start -->
<div class="container">

	<div class="row justify-content-around">


		<!-- Contact Form -->
		<div class="col-lg-6 col-lg-offset-3">

			<section id="contact text-center">
				<h1 class=" margin-bottom-35 text-center">อายุการใช้งานหมดแล้ว</h1>
                <h4 class="text-center">กรุณาทำการติดต่อ แอดมินเพื่อทำการต่ออายุการใช้งาน</h4>
                <div class="text-center">
                    <br>
                <a href="https://line.me/R/ti/p/@924jqlvk" target="_blank">
                <img src="{{ url('assets/img/Line.png') }}" style="height:50px" > 
                </a>
                </div>
                
				
                
			</section>
		</div>
		<!-- Contact Form / End -->

	</div>

</div>
<!-- Container / End -->

<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				

			</div>
		</div>
	</div>
</div>


@endsection

@section('scripts')


@stop('scripts')