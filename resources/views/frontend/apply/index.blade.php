@extends('layouts.frontend')

@section('title', "Apply Reokho Trade International ")
@section('meta_description', "")
@section('meta_meta_keyword', "")
@section('author', "HUMAUN KABIR")

@section('content')
		<!-- Banner -->
		<div class="banner banner-static has-bg bg-secondary">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
						@if(session()->get('lang') == 'japan')
						<div class="banner-text">
                    		<p class="">今すぐ申し込む</p>
						</div>
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="index.php">家</a></li>
								<li class="active"><span>今すぐ申し込む</span></li>
							</ul>
						</div>
						@else
						<div class="banner-text">
                    		<p class="">Apply Now</p>
						</div>
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li class="active"><span>Apply NOw</span></li>
							</ul>
						</div>
						@endif
						

						

					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="image/banner-inner.jpg" alt="Reokho Trade" />
			</div>
		</div>
		<!-- End Banner -->


	
	<!-- Content -->
	<div class="section section-contents section-contact section-pad">
		<div class="container">
			<div class="content row">

				<div class="contact-content row">
					<div class="drop-message col-md-7 res-m-bttm">
						<h2 class="heading-section"></h2>
						<form  class="form-message" action="{{route('apply.send')}}" method="post">
							@csrf
							<div class="form-results"></div>
							<div class="form-group row">
							@if(session()->get('lang') == 'japan')
							<div class="form-field col-md-6 form-m-bttm">
								<input name="fname" type="text" placeholder="ファーストネーム *" class="form-control" required autofocus>
							</div>
							<div class="form-field col-md-6 form-m-bttm">
								<input name="lname" type="text" placeholder="苗字 *" class="form-control "required autofocus>
							</div>
							</div>
							<div class="form-group row">
								<div class="form-field col-md-6 form-m-bttm">
									<input name="phone" type="text" placeholder="電話番号" class="form-control "required autofocus>
								</div>
								<div class="form-field col-md-6">
									<input name="email" type="email" placeholder="Eメール *" class="form-control "required autofocus>
								</div>
							</div>
							<div class="form-group row">
								<div class="form-field col-md-6">
									<select class="form-select" name="destination">
									  <option selected>留学先*</option>
									  <option value="JAPAN">日本</option>
									  <option value="CHINA">中国</option>
									  <option value="USA">アメリカ合衆国</option>
									</select>
								</div>
								<div class="form-field col-md-6">
									<select class="form-select" name="course">
									  <option selected>コースレベル*</option>
									  <option value="Foundation">財団</option>
									  <option value="Undergraduate">学部</option>
									  <option value="Postgraduate">大学院</option>
									  <option value="Research">リサーチ</option>
									  <option value="Professional">プロ</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="form-field col-md-12">
									<input name="subject" type="text" placeholder="主題*" class="form-control "required autofocus>
								</div>
							</div>
							<div class="form-group row">
								<div class="form-field col-md-12">
									<textarea name="message" placeholder="メッセージ *" class="txtarea form-control "required autofocus></textarea>
								</div>
							</div>

							@else

							<div class="form-field col-md-6 form-m-bttm">
								 <input type="text" placeholder="First Name *" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autofocus />

							</div>

							<div class="form-field col-md-6 form-m-bttm">
								<input name="lname" type="text" placeholder="Last Name *" class="form-control" required autofocus>
							</div>
							</div>
							<div class="form-group row">
								<div class="form-field col-md-6 form-m-bttm">
									<input name="phone" type="text" placeholder="Phone" class="form-control" required autofocus>
								</div>
								<div class="form-field col-md-6">
									<input name="email" type="email" placeholder="Email *" class="form-control" required autofocus>
								</div>
							</div>
			
							<div class="form-group row">
								<div class="form-field col-md-6">
									<select class="form-select" name="destination">
									  <option selected>Select Study Destination*</option>
									  <option value="JAPAN">JAPAN</option>
									  <option value="CHINA">CHINA</option>
									  <option value="USA">USA</option>
									</select>
								</div>
								<div class="form-field col-md-6">
									<select class="form-select" name="course">
									  <option selected>Select Course Level*</option>
									  <option value="Foundation">Foundation</option>
									  <option value="Undergraduate">Undergraduate</option>
									  <option value="Postgraduate">Postgraduate</option>
									  <option value="Research">Research</option>
									  <option value="Professional">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="form-field col-md-12">
									<input name="subject" type="text" placeholder="Subject*" class="form-control" required autofocus>
								</div>
							</div>
							<div class="form-group row">
								<div class="form-field col-md-12">
									<textarea name="message" placeholder="Messages *" class="txtarea form-control" required autofocus></textarea>
								</div>
							</div>
							@endif
							
							<style>
								#thank-you-message {
								display: none;
								}

								#thank-you-message.show {
								display: block;
								}
							</style>
							<p id="thank-you-message">
								Thank you for contacting us. We will be in touch with you very soon.
							</p>

							{{-- <input class="btn solid-btn sb-h" style="cursor: pointer;"name="submit" type="submit" value="Send" /> --}}
							<button type="submit" style="cursor: pointer;" class="btn solid-btn sb-h">Submit</button>
						</form>
						<br>
						@if(Session::has('message_sent'))
							<div class="alert alert-success" role="alert">
								{{Session::get('message_sent')}}
							</div>
						@endif
					</div>
					<div class="contact-details col-md-4 col-md-offset-1">
						@if(session()->get('lang') == 'japan')
						<h2 class="">申請書のダウンロード</h2>
						<p><a href="{{asset('public/frontend')}}/image/Student-Application-Form.doc"><em class="fa fa-file-pdf-o"></em> 学生申込書</a></p>					
						@else
						<h2 class="">Download Applycation Form</h2>
						<p><a href="{{asset('public/frontend')}}/image/Student-Application-Form.doc"><em class="fa fa-file-pdf-o"></em> Student Application Form</a></p>
						
						@endif
							
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->

@endsection


