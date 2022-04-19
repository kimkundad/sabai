<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="{{ url('/') }}"><img src="{{ url('assets/img/rnRz3l.png') }}" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>


				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

                        <li><a  href="{{ url('/') }}">หน้าแรก</a></li>
						<li><a href="https://line.me/R/ti/p/@924jqlvk" target="_blank">เติมเงิน</a></li>
                        <li><a  href="#">ไลฟ์สด</a></li>

						
						
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">
				@if (Auth::guest())
				<div class="header-widget" style="margin-top:20px">
                    <a href="https://line.me/R/ti/p/@924jqlvk" target="_blank" class="sign-in "><i class="sl sl-icon-login"></i> สมัครสมาชิก</a>
					<a href="{{ url('login') }}" class="button with-icon">เข้าสู่ระบบ <i class="sl sl-icon-user"></i></a>
				</div>
				@else
				<div class="header-widget" style="margin-top:20px">
							<div class="user-menu " >
                                <div class="user-name" ><span><img src="{{ url('assets/img/avatar/'.Auth::user()->avatar) }}"  /></span>
                                    Hi, {{ substr(Auth::user()->phone,0,15) }}
                                </div>
                                <ul>
                                  <!--  <li><a href="/profile"><i class="sl sl-icon-user"></i> ข้อมูลส่วนตัว</a></li>
                                    <li><a href="/company"><i class="im im-icon-Folder-WithDocument"></i> Biller ID</a></li>
                                    <li><a href="/payment_terminal"><i class="im im-icon-Device-SyncwithCloud"></i> Payment Terminal</a></li>
                                    <li><a href="/api_service"><i class="im im-icon-Gear"></i> ข้อมูล API</a></li>
                                    <li><a onClick={handleSubmit}><i class="sl sl-icon-power"></i> ออกจากระบบ</a></li>
									-->
									<li><a >หมดอายุ {{ formatDateThat(Auth::user()->endday) }}</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="sl sl-icon-power"></i> ออกจากระบบ</a></li>
                                </ul> 
                                
                            </div>
				</div>
				@endif
			</div>
			<!-- Right Side Content / End -->

			<!-- Sign In Popup -->
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Sign In</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">

					<ul class="tabs-nav">
						<li class=""><a href="#tab1">Log In</a></li>
						<li><a href="#tab2">Register</a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->
						<div class="tab-content" id="tab1" style="display: none;">
							<form method="post" class="login">

								<p class="form-row form-row-wide">
									<label for="username">Username:
										<i class="im im-icon-Male"></i>
										<input type="text" class="input-text" name="username" id="username" value="" />
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="password">Password:
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" type="password" name="password" id="password"/>
									</label>
									<span class="lost_password">
										<a href="#" >Lost Your Password?</a>
									</span>
								</p>

								<div class="form-row">
									<input type="submit" class="button border margin-top-5" name="login" value="Login" />
									<div class="checkboxes margin-top-10">
										<input id="remember-me" type="checkbox" name="check">
										<label for="remember-me">Remember Me</label>
									</div>
								</div>
								
							</form>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">

							<form method="post" class="register">
								
							<p class="form-row form-row-wide">
								<label for="username2">Username:
									<i class="im im-icon-Male"></i>
									<input type="text" class="input-text" name="username" id="username2" value="" />
								</label>
							</p>
								
							<p class="form-row form-row-wide">
								<label for="email2">Email Address:
									<i class="im im-icon-Mail"></i>
									<input type="text" class="input-text" name="email" id="email2" value="" />
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password1">Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password1" id="password1"/>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password2">Repeat Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password2" id="password2"/>
								</label>
							</p>

							<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
	
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- Sign In Popup / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->