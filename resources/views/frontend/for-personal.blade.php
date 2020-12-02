@extends('layouts.frontend.app')
@section('content')
<!-- features -->
<section class="pt-0">
<!-- feature banner -->
<div class="main-feature-banner">
	<div class="container sml-container">
			<div class="row">
				<div class="col-lg-12">
					<!-- feature banner -->
					<div class="feature-banner">
						<!-- features main head -->
						<div class="feature-min-head">
							<h2>Features You Will Love</h2>
							<p>The simple, intuitive and powerful app to manage your Business cards in a systematic way</p>
							<div class="stores-btn">
								<a href="#"><img src="{{ asset('public/frontend_asset/image/playstore.png') }}" alt="playstore button"></a>
								<a href="#"><img src="{{ asset('public/frontend_asset/image/appstore.png') }}" alt="appstore button"></a>
							</div>
						</div>
						<!-- features main head end -->
						
						<!-- feature banner image -->
						<div class="feature-banner-img">
							<img class="img-fluid" src="{{ asset('public/frontend_asset/image/feature-3.gif') }}" alt="vactor image">
							<img class="arrows-gif" src="{{ asset('public/frontend_asset/image/arrows.gif') }}" alt="arrow gif">
						</div>
						<!-- feature banner image end -->
					</div>
					<!-- feature banner end -->
				</div>
			</div>
	</div>
</div>
<!-- feature banner -->

<!-- small container feature -->
	<div class="feature-phone">
		<div class="container mdm-sml-container">
			<div class="row">
				<div class="col-lg-12">
					<!-- feature box -->
					<div class="feature-phone-box">
						<img src="{{ asset('public/frontend_asset/image/feature-phone.png') }}" alt="phone">
						<div id="personalized" class="feature-info-box">
							<h3 class="feature-count">1</h3>
							<h2>Personalized</h2>
							<p>We bring on like-minded and talented members to help you grow a stronger business for fiercely reaching towards higher goals every day. We try to form an all-star team that deeply investigates your company culture to advertise about it.</p>
						</div>
					</div>
					<!-- feature box end -->


					<!-- feature box -->
					<div class="feature-phone-box middle-box">
						<div id="touchless" class="feature-info-box feature-left wow animate__animated animate__fadeInLeftBig" data-wow-duration="1.2s" >
							<h3 class="feature-count">2</h3>
							<h2>Touchless</h2>
							<p>We bring on like-minded and talented members to help you grow a stronger business for fiercely reaching towards higher goals every day. We try to form an all-star team that deeply investigates</p>
						</div>
						<img src="{{ asset('public/frontend_asset/image/feature-phone.png') }}" alt="phone">
						<div id="smart" class="feature-info-box feature-right wow animate__animated animate__fadeInRightBig" data-wow-duration="1.2s">
							<h3 class="feature-count">3</h3>
							<h2>Smart</h2>
							<p>We bring on like-minded and talented members to help you grow a stronger business for fiercely reaching towards higher goals every day. We try to form an all-star team that deeply investigates</p>
						</div>
					</div>
					<!-- feature box end -->

					<!-- feature box -->
					<div class="feature-phone-box right-box">
						<div id="fresh" class="feature-info-box wow animate__animated animate__fadeInLeftBig" data-wow-duration="1.2s">
							<h3 class="feature-count">4</h3>
							<h2>Fresh</h2>
							<p>We bring on like-minded and talented members to help you grow a stronger business for fiercely reaching towards higher goals every day. We try to form an all-star team that deeply investigates your company culture to advertise about it.</p>
						</div>
						<img src="{{ asset('public/frontend_asset/image/feature-phone.png') }}" alt="phone">
					</div>
					<!-- feature box end -->

					<!-- feature box -->
					<div class="feature-phone-box middle-box">
						<div id="know" class="feature-info-box feature-left wow animate__animated animate__fadeInLeftBig" data-wow-duration="1.2s">
							<h3 class="feature-count">5</h3>
							<h2>Know</h2>
							<p>We bring on like-minded and talented members to help you grow a stronger business for fiercely reaching towards higher goals every day. We try to form an all-star team that deeply investigates</p>
						</div>
						<img src="{{ asset('public/frontend_asset/image/feature-phone.png') }}" alt="phone">
						<div class="feature-info-box feature-right wow animate__animated animate__fadeInRightBig" data-wow-duration="1.2s">
							<h3 class="feature-count">6</h3>
							<h2>Personalized</h2>
							<p>We bring on like-minded and talented members to help you grow a stronger business for fiercely reaching towards higher goals every day. We try to form an all-star team that deeply investigates</p>
						</div>
					</div>
					<!-- feature box end -->

					<!-- feature box -->
					<div class="feature-phone-box">
						<img src="{{ asset('public/frontend_asset/image/feature-phone.png') }}" alt="phone">
						<div class="feature-info-box wow animate__animated animate__fadeInRightBig" data-wow-duration="1.2s">
							<h3 class="feature-count">7</h3>
							<h2>Personalized</h2>
							<p>We bring on like-minded and talented members to help you grow a stronger business for fiercely reaching towards higher goals every day. We try to form an all-star team that deeply investigates your company culture to advertise about it.</p>
						</div>
					</div>
					<!-- feature box end -->
				</div>
			</div>
		</div>
	</div>
<!-- small container feature end -->
</section>
<!-- features end -->

<!-- Contact us modal -->
<div class="modal fade contactus_modal" id="contact_Us_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	  <div class="modal-content">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		<div class="inr-modal-body">
			<div class="contact-form-img">
				<img class="img-fluid" src="{{ asset('public/frontend_asset/image/feature-2.png') }}" alt="vactor image">
			</div>
			<div class="contact-form-content">
				<h3>Having any questions? Let's talk</h3>
				<p>if you still have questions about our features or pricing, feel free to contact us.</p>
				<form>
					<div class="form-group">
						<label>How can i ask you</label>
						<select class="form-control">
							<option>Mister</option>
							<option>Miss</option>
						</select required>
					</div>
					<div class="form-group">
						<label>Name</label>
						<input class="form-control" type="text" placeholder="Jhon Doe" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input class="form-control" type="email" placeholder="JhonDoe@mail.com" required>
					</div>
					<div class="form-group">
						<label>Phone Number</label>
						<input class="form-control" type="number" placeholder="+91 9876543210" required>
					</div>
					<div class="form-group">
						<label>Your Comments</label>
						<textarea class="form-control" rows="3" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry." required></textarea>
					</div>
					<button class="contact-form-btn">Send</button>
				</form>
			</div>
		</div>
	  </div>
	</div>
  </div>
<!-- Contact us modal end -->
@endsection