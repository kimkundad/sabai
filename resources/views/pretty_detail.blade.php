@extends('layouts.template')
@section('ga')
window.gaTitle = {{ $objs->title }};
@endsection

@section('stylesheet')
<link rel="stylesheet" href="{{url('assets/css/plyr.css')}}" id="colors">
<style>
.blog-post {
    background-color: #00012b;
}
.post-meta li {
    display: inline-block;
    color: #c132b2;
}
.post-meta li a {
    color: #c132b2;
}


</style>


@stop('stylesheet')

@section('content')



<!-- Content
================================================== -->
<div class="container margin-top-75">

	<!-- Blog Posts -->
	<div class="blog-page">
	    <div class="row">

            <!-- Post Content -->
            <div class="col-lg-9 col-md-offset-1">

                    <!-- Blog Post -->
                    <div class="posts blog-post single-post">

                      

                        

                     <div class="post-block post-video-text-in_block">
                        <div class="post-text-in">
                        <div class="post-video">
                          
                            <video id="player" poster="{{ url('assets/pretty/'.$objs->image_y) }}" playsinline="" controls="">
                              <source src="{{ url('assets/video/'.$objs->video) }}" type="video/mp4">
                              <track kind="captions" label="English captions" src="" srclang="en" default="">
                            </video>
                          </div>
                          <div class="post-overlay"></div>
                        </div>
                      </div>


                      <div class="post-content">

					<h3>{{ $objs->title }}</h3>

					<ul class="post-meta">
						<li>{{ formatDateThat($objs->live_date) }}</li>
						<li><a href="#">พริตตี้ไลฟ์</a></li>
						<li><a href="#">{{ number_format((float)$objs->view, 0, '.', '') }} view</a></li>
					</ul>

					<p>{!! $objs->detail !!}</p>

					
					<div class="clearfix"></div>

				</div>

                    </div>

            </div>

        </div>
	</div>
</div>

@endsection

@section('scripts')

<script src="{{ url('assets/scripts/plyr.min.js') }}"></script>
<script>


jQuery(document).ready(function($) {
	"use strict";

  createVideoPlayer('#player')
  function createVideoPlayer(ele){
		const player = new Plyr(ele ,{
			controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume','settings', 'fullscreen'],
			hideControls: true,
      ratio: '16:9'
		});
	}
});

</script>
@stop('scripts')