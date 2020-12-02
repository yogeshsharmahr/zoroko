@extends('layouts.frontend.app')
@section('content')
<!-- help banner -->
<section class="p-0">
	<div class="help">
		<div class="container sml-container">
			<div class="row">
				<div class="col-lg-12">
					<!-- help banner -->
					<div class="help-banner">
						<div class="question-mark">
							<img src="{{ asset('public/frontend_asset/image/questionmark.png') }}" alt="question Mark">
						</div>
						<h2>Hi, how can we help?</h2>
						<div class="form-group help-search">
							<input class="form-control" type="search" placeholder="search...">
							<button><i class="icofont-search-1"></i></button>
						</div>
					</div>
					<!-- help banner -->					
				</div>
				<div class="col-lg-12">
					<div class="help-tabs">
						<ul>
							<li><a href="#help-inr-1"><span><img src="{{ asset('public/frontend_asset/image/new-help-1.png') }}" alt="icon"></span>Zoroko App</a></li>
							<li><a href="#help-inr-2"><span><img src="{{ asset('public/frontend_asset/image/new-help-2.png') }}" alt="icon"></span>Profile</a></li>
							<li><a href="#help-inr-3"><span><img src="{{ asset('public/frontend_asset/image/new-help-3.png') }}" alt="icon"></span>Create & Edit Card</a></li>
							<li><a href="#help-inr-4"><span><img src="{{ asset('public/frontend_asset/image/new-help-4.png') }}" alt="icon"></span>Send & Receive Card</a></li>
							<li><a href="#help-inr-5"><span><img src="{{ asset('public/frontend_asset/image/new-help-5.png') }}" alt="icon"></span>Use Card</a></li>
							<li><a href="#help-inr-6"><span><img src="{{ asset('public/frontend_asset/image/new-help-8.png') }}" alt="icon"></span>Manage My Contacts</a></li>
							<li><a href="#help-inr-7"><span><img src="{{ asset('public/frontend_asset/image/new-help-7.png') }}" alt="icon"></span>Organize Cards</a></li>
							<li><a href="#help-inr-8"><span><img src="{{ asset('public/frontend_asset/image/new-help-12.png') }}" alt="icon"></span>Account & Settings</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- help banner end -->

<!-- help options -->
<section class="p-0">
	<div class="help-options">
		<div class="container sml-container">
			<div class="row hlp-inr-sec hlp-tab-1" id="help-inr-1">
				<!-- inner-section -->
					<div class="col-lg-12 hlp-hd">
						<span><img src="{{ asset('public/frontend_asset/image/new-help-1.png') }}" alt="icon"></span><h4 class="inner-sec-head">Zoroko App</h4>
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-1.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">Your Zoroko App</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>What Is Zoroko</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>How Do I Use It?</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>All Features</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-13.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">Pictures</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Overview</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Add</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Remove</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Use</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-11.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">Auto Features</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Address Book Sync</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Card Auto Update</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Address Book Auto Update</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
				<!-- inner-section end -->
			</div>
			<div class="row hlp-inr-sec hlp-tab-2" id="help-inr-2">
				<!-- inner-section -->
					<div class="col-lg-12 hlp-hd">
						<span><img src="{{ asset('public/frontend_asset/image/new-help-2.png') }}" alt="icon"></span><h4 class="inner-sec-head">Profile</h4>
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-14.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">Overview</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Profile Overview</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Privacy</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-9.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">Personal</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Personal Overview</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Edit Personal</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-7.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">Connect</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Email</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Phone</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Social</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>URL</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
					<div class="col-lg-4">
						<!-- help item -->
						<div class="help-item" id="zoroko_app">
							<div class="help-inr-cont">
								<img src="{{ asset('public/frontend_asset/image/new-help-15.png') }}" alt="help icon">
								<h3 class="bg-light-ornage">Employment</h3>
								<ul>
									<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Add Job</a></li>
									<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Edit Job</a></li>
									<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Delete Job</a></li>
								</ul>
							</div>
						</div>
						<!-- help item end -->
					</div>
					<div class="col-lg-4">
						<!-- help item -->
						<div class="help-item" id="zoroko_app">
							<div class="help-inr-cont">
								<img src="{{ asset('public/frontend_asset/image/new-help-16.png') }}" alt="help icon">
								<h3 class="bg-light-ornage">School</h3>
								<ul>
									<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Add School</a></li>
									<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Edit School</a></li>
									<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Delete School</a></li>
								</ul>
							</div>
						</div>
						<!-- help item end -->
					</div>
					<div class="col-lg-4">
						<!-- help item -->
						<div class="help-item" id="zoroko_app">
							<div class="help-inr-cont">
								<img src="{{ asset('public/frontend_asset/image/new-help-17.png') }}" alt="help icon">
								<h3 class="bg-light-ornage">Places</h3>
								<ul>
									<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Add Address</a></li>
									<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Edit Address</a></li>
									<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Delete Address</a></li>
								</ul>
							</div>
						</div>
						<!-- help item end -->
					</div>
				<!-- inner-section end -->
			</div>
			<div class="row hlp-inr-sec hlp-tab-3" id="help-inr-3">
				<!-- inner-section -->
					<div class="col-lg-12 hlp-hd">
						<span><img src="{{ asset('public/frontend_asset/image/new-help-3.png') }}" alt="icon"></span><h4 class="inner-sec-head">Create & Edit Card</h4>
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-3.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">Create & Edit Cards</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Overview</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>New Card</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Edit Card</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
				<!-- inner-section end -->
			</div>
			<div class="row hlp-inr-sec hlp-tab-4" id="help-inr-4">
				<!-- inner-section -->
					<div class="col-lg-12 hlp-hd">
						<span><img src="{{ asset('public/frontend_asset/image/new-help-4.png') }}" alt="icon"></span><h4 class="inner-sec-head">Send & Receive Card</h4>
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-4.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">Send Card</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Overview</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Share My Card</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Share Someone Else's Card</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Flick & Grab</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>To Existing Device Contacts</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-5.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">Receive Card</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Overview</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Directly In App</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Via Email</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Via SMS</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Flick & Grab</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
				<!-- inner-section end -->
			</div>
			<div class="row hlp-inr-sec hlp-tab-5" id="help-inr-5">
				<!-- inner-section -->
					<div class="col-lg-12 hlp-hd">
						<span><img src="{{ asset('public/frontend_asset/image/new-help-5.png') }}" alt="icon"></span><h4 class="inner-sec-head">Use Card</h4>
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-11.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">How to Use a Card</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Overview</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Call</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>SMS</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Email</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Address</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Web</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
				<!-- inner-section end -->
			</div>
			<div class="row hlp-inr-sec hlp-tab-6" id="help-inr-6">
				<!-- inner-section -->
					<div class="col-lg-12 hlp-hd">
						<span><img src="{{ asset('public/frontend_asset/image/new-help-8.png') }}" alt="icon"></span><h4 class="inner-sec-head">Manage My Contacts</h4>
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-1.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">Zoroko Contacts</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>See Profile</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Change Pocket</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Notes</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-8.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">Device Contacts</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Overview</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Who's Using Zoroko?</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Sharing My Card</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
				<!-- inner-section end -->
			</div>
			<div class="row hlp-inr-sec hlp-tab-7" id="help-inr-7">
				<!-- inner-section -->
					<div class="col-lg-12 hlp-hd">
						<span><img src="{{ asset('public/frontend_asset/image/new-help-7.png') }}" alt="icon"></span><h4 class="inner-sec-head">Organize Cards</h4>
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-5.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">Received Cards</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Pocket Overview</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Create Pocket</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Rename Pocket</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Delete Pocket</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Move Card</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-6.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">My Cards</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Overview</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Card Map</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Swap</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Yank</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Stale</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Edit Card (take user to create/edit card)</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
				<!-- inner-section end -->
			</div>
			<div class="row hlp-inr-sec hlp-tab-8" id="help-inr-8">
				<!-- inner-section -->
					<div class="col-lg-12 hlp-hd">
						<span><img src="{{ asset('public/frontend_asset/image/new-help-12.png') }}" alt="icon"></span><h4 class="inner-sec-head">Account & Settings</h4>
					</div>
					<div class="col-lg-4">
								<!-- help item -->
								<div class="help-item" id="zoroko_app">
									<div class="help-inr-cont">
										<img src="{{ asset('public/frontend_asset/image/new-help-12.png') }}" alt="help icon">
										<h3 class="bg-light-ornage">Zoroko Account</h3>
										<ul>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Confirm Account</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Notifications</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Change Password</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Change Login Id</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Change Registered Mobile</a></li>
											<li><a href="#" data-toggle="modal" data-target="#help_modal"><span>Q</span>Change Registered Email</a></li>
										</ul>
									</div>
								</div>
								<!-- help item end -->
					</div>
				<!-- inner-section end -->
			</div>
		</div>
	</div>
</section>
<!-- help options end -->


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

<!-- help modal -->
<div class="modal fade help_modal" id="help_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLongTitle">Zoroko App</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  <h4>Q: What is it?</h4>
			  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui numquam ut ea dolore, sed alias maiores sit doloribus corrupti! Nisi dolor ipsa earum? Reprehenderit provident fugiat tempora dolores rerum, facere sint tempore temporibus? Eos laborum quibusdam magnam non distinctio labore eum, dicta nesciunt reiciendis? Quidem alias adipisci quibusdam enim porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui numquam ut ea dolore, sed alias maiores sit doloribus corrupti! Nisi dolor ipsa earum? Reprehenderit provident fugiat tempora dolores rerum, facere sint tempore temporibus? Eos laborum quibusdam magnam non distinctio labore eum, dicta nesciunt reiciendis? Quidem alias adipisci quibusdam enim porro
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui numquam ut ea dolore, sed alias maiores sit doloribus corrupti! Nisi dolor ipsa earum? Reprehenderit provident fugiat tempora dolores rerum, facere sint tempore temporibus? Eos laborum quibusdam magnam non distinctio labore eum, dicta nesciunt reiciendis? Quidem alias adipisci quibusdam enim porro
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui numquam ut ea dolore, sed alias maiores sit doloribus corrupti! Nisi dolor ipsa earum? Reprehenderit provident fugiat tempora dolores rerum, facere sint tempore temporibus? Eos laborum quibusdam magnam non distinctio labore eum, dicta nesciunt reiciendis? Quidem alias adipisci quibusdam enim porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui numquam ut ea dolore, sed alias maiores sit doloribus corrupti! Nisi dolor ipsa earum? Reprehenderit provident fugiat tempora dolores rerum, facere sint tempore temporibus? Eos laborum quibusdam magnam non distinctio labore eum, dicta nesciunt reiciendis? Quidem alias adipisci quibusdam enim porro
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui numquam ut ea dolore, sed alias maiores sit doloribus corrupti! Nisi dolor ipsa earum? Reprehenderit provident fugiat tempora dolores rerum, facere sint tempore temporibus? Eos laborum quibusdam magnam non distinctio labore eum, dicta nesciunt reiciendis? Quidem alias adipisci quibusdam enim porro
			  </p>
			</div>
		  </div>
	  </div>
	</div>
  </div>
<!-- help modal end -->
@endsection