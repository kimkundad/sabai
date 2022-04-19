@extends('layouts.template')

@section('title')
ค้นหาร้านวัสดุก่อสร้าง - kozang
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')


<!-- Recent Blog Posts -->
<section class="fullwidth border-top  padding-top-75 padding-bottom-75" data-background-color="#00012b">
	<div class="container">

    <div class="row">
			<div class="col-md-4">
                <div class="padding-bottom-75">
					<a href="https://sabaibet.net/" target="_blank">
                    <img src="{{ url('assets/img/banner_1.jpeg') }}" alt="">
					</a>
                </div>
			</div>
            <div class="col-md-4">
                <div class="padding-bottom-75">
				<a href="https://sabaibet.net/" target="_blank">
                    <img src="{{ url('assets/img/S__23191560.jpeg') }}" alt="">
					</a>
                </div>
			</div>
            <div class="col-md-4">
                <div class="padding-bottom-75">
				<a href="https://sabaibet.net/" target="_blank">
                    <img src="{{ url('assets/img/S__23191559.jpeg') }}" alt="">
					</a>
                </div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
                    ไลฟ์สด <b>VIP</b> กลุ่มลับอันดับ1
                    <span>เข้าดูไลน์สด ราคากันเอง สนใจ กลุ่มลับ สมัครได้เลย</span>
				</h3>
			</div>
		</div>

		<div class="row">

		@if(isset($obj1))
        <div class="col-md-8 col-md-offset-2">

			<!-- Image Box -->
			<a href="{{ url('pretty_live/'.$obj1->id) }}" class="img-box margin-bottom-75" data-background-image="{{ url('assets/pretty/'.$obj1->image_y) }}">
				<div class="img-box-content visible">
                <button class="button margin-bottom-20" href="{{ url('pretty_live/'.$obj1->id) }}"><i class="sl sl-icon-control-play"></i> Watch now</button>
                   
					<h4>{{ $obj1->title }}</h4>
					<span>{{ number_format((float)$obj1->view, 0, '.', '') }} คนดู</span>
				</div>
			</a>
            
		</div>
		@endif

		@if(isset($obj2))
		@foreach($obj2 as $u)
			<!-- Blog Post Item -->
			<div class="col-md-3">
				<a href="{{ url('pretty_detail/'.$u->id) }}" class="blog-compact-item-container">
					<div class="blog-compact-item">
						<img src="{{ url('assets/pretty/'.$u->image_x) }}" alt="">
						<span class="blog-item-tag">พริตตี้ไลฟ์</span>
						<div class="blog-compact-item-content">
							<ul class="blog-post-tags">
								<li>{{ formatDateThat($u->live_date) }} เวลา {{ $u->time }}</li>
							</ul>
							<h3>{{ $u->name }}</h3>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->
			@endforeach
		@endif

			<div class="col-md-12 centered-content">
				<a href="{{ url('/') }}" class="button border margin-top-10">ทั้งหมด</a>
			</div>

		</div>

	</div>
</section>
<!-- Recent Blog Posts / End -->

<!-- Content
================================================== -->
<section class="fullwidth padding-bottom-35" data-background-color="#00012b">
	<div class="container">

    <div class="row">
        <div class="col-md-2"></div>
			<div class="col-md-4">
                <div>
				<a href="https://sabaibet.net/" target="_blank">
                    <img src="{{ url('assets/img/LINE_P2022331_015411.jpeg') }}" alt="">
				</a>
                </div>
			</div>
            <div class="col-md-4">
                <div>
				<a href="https://sabaibet.net/" target="_blank">
                    <img src="{{ url('assets/img/bn_22.jpeg') }}" alt="">
				</a>
                </div>
			</div>
            <div class="col-md-2"></div>
		</div>

	
</div>
</section>


<!-- Content
================================================== -->
<section class="fullwidth padding-bottom-35" data-background-color="#00012b">
	<div class="container">

  
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-top-75">
                ชุดชั้นในสุ่มแจก
				<span>ถอดแจกให้สดๆส่งถึงหน้าบ้านจาก <i>สาวพริตตี้ในไลฟ์</i> </span>
			</h3>
		</div>

	</div>
</div>
</section>

<!-- Categories Carousel -->
<section class="fullwidth padding-bottom-75" data-background-color="#00012b">
	<div class="fullwidth-slick-carousel category-carousel">

		

		<!-- Item -->
		<div class="fw-carousel-item">
			<div class="category-box-container">
				<a href="#" class="category-box" data-background-image="{{ url('assets/img/206546564_119781086994694_4794853110029927201_n.jpeg') }}">
					
				</a>
			</div>
		</div>

		<!-- Item -->
		<div class="fw-carousel-item">
			<div class="category-box-container">
				<a href="#" class="category-box" data-background-image="{{ url('assets/img/215382318_875957883006388_1894356434303083629_n.jpeg') }}">
					
				</a>
			</div>
		</div>

		<!-- Item -->
		<div class="fw-carousel-item">
			<div class="category-box-container">
				<a href="listings-half-screen-map-list.html" class="category-box" data-background-image="{{ url('assets/img/215626487_875957246339785_5789568143837912944_n.jpeg') }}">
					
				</a>
			</div>
		</div>

		<!-- Item -->
		<div class="fw-carousel-item">
			<div class="category-box-container">
				<a href="listings-half-screen-map-list.html" class="category-box" data-background-image="{{ url('assets/img/277244842_1028923624376479_589344495431442352_n.jpeg') }}">
					
				</a>
			</div>
		</div>

        <!-- Item -->
		<div class="fw-carousel-item">
			<div class="category-box-container">
				<a href="listings-half-screen-map-list.html" class="category-box" data-background-image="{{ url('assets/img/277371401_1028922894376552_3563740679212677800_n.jpeg') }}">
				
				</a>
			</div>
		</div>

        <!-- Item -->
		<div class="fw-carousel-item">
			<div class="category-box-container">
				<a href="listings-half-screen-map-list.html" class="category-box" data-background-image="{{ url('assets/img/277492571_1029774700958038_6189224565470045001_n.jpeg') }}">
					
				</a>
			</div>
		</div>

	</div>
    </section>
<!-- Categories Carousel / End -->

@endsection

@section('scripts')

@stop('scripts')