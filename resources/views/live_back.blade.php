@extends('layouts.template')
@section('ga')
window.gaTitle = {{ $objs->title }};
@endsection

@section('stylesheet')
<link rel="stylesheet" href="https://cdn.plyr.io/1.8.2/plyr.css">
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
                            <video preload="none" id="player" poster="{{ url('assets/pretty/'.$objs->image_y) }}" allow="autoplay" controls>
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

<script src="https://cdn.plyr.io/1.8.2/plyr.js"></script>
    <script src="https://cdn.jsdelivr.net/hls.js/latest/hls.js"></script>
<script>


(function () {
  var video = document.querySelector('#player');

  if (Hls.isSupported()) {
    var hls = new Hls();
    hls.loadSource('https://live.sabaiav.net/hls/abdi.m3u8');
    hls.attachMedia(video);
    hls.on(Hls.Events.MANIFEST_PARSED,function() {
      video.play();
    });
  }
  
  plyr.setup(video);
})();

</script>
@stop('scripts')