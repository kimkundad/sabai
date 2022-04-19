<!-- Footer
================================================== -->
<div id="footer" class="sticky-footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="{{ url('assets/img/rnRz3l.png') }}" alt="">
				<br><br>
				<p>กลุ่มลับไลน์ ปัจจุบันนี้ความนิยมการติดตามชมคลิปลับหรือการไลฟ์สด มันทำให้ทุกท่านได้เปิดประสบการณ์ในรูปแบบใหม่ที่มีสีสันและความเร้าใจให้ได้ลุ้นตื่นเต้นไปตลอดเวลา สามารถเข้ามาใช้บริการกลุ่มลับไลน์ที่จะทำให้การติดตามคลิปเด็ด ๆ จากสาวสวย</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				<h4>ช่วยเหลือ</h4>
				<ul class="footer-links">
				@if (Auth::guest())
					<li><a href="#">เข้าสู่ระบบ</a></li>
					<li><a href="#">สมัครสมาชิก</a></li>
					@else
					@endif
					<li><a href="https://line.me/R/ti/p/@924jqlvk" target="_blank">เติมเงิน</a></li>
					<li><a href="#">ไลฟ์สด</a></li>
				</ul>

				
				<div class="clearfix"></div>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>ติดต่อเรา</h4>
				<div class="text-widget">
					Line ID: <a href="https://line.me/R/ti/p/@924jqlvk" target="_blank"><span>@sabaibet </span></a><br>
				</div>

				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
				</ul>

			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2022 Sabaiav. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->