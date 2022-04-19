@extends('layouts.template')
@section('ga')
window.gaTitle = {{ $objs->title }};
@endsection

@section('stylesheet')
<link rel="stylesheet" href="https://cdn.plyr.io/1.8.2/plyr.css">
<link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
  <script src="http://vjs.zencdn.net/4.12/video.js"></script>
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

#player{

 max-height:480px;
}
.vjs-default-skin .vjs-big-play-button:before {
    top: 0;
    content: "\e001";
    font-family: VideoJS;
    line-height: 2.6em;
    text-shadow: 0.05em 0.05em 0.1em #000;
    text-align: center;
    position: absolute;
    left: 0;
    width: 100%;
    height: 100%;
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
                        <video id="example-video" poster="{{ url('assets/pretty/'.$objs->image_y) }}" style="width:100%; min-height:450px" class="video-js vjs-default-skin" controls>
  <source
     src="https://live.sabaiav.net/hls/abdi.m3u8"
     type="application/x-mpegURL">
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

<script src="https://unpkg.com/video.js/dist/video.js"></script>
<script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
<script>
var player = videojs('example-video',{
  aspectRatio: '16:9'
});
player.play();
</script>
@stop('scripts')