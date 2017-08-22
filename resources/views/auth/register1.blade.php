@extends('layouts.guestlayout')	

@section('more-styles')	
<style type="text/css">
	.tab-content .panel-body+.panel-body {
	    border-top: 0;
	}
	.panel-group-control .panel-title>a.collapsed:before {
	    content: '\e9c3';
	}
	.panel-group-control .panel-title>a:before {
	    content: '\e9c1';
	}
	label {
	    margin-bottom: 8px;
	    font-weight: 800;
	    color: #4caf50;
	}
	span.addon-text{
		margin-left: 1em;
	}
	.input-group{
		margin-bottom: 20px;
	}
</style>
@endsection

@section('content')
		<!-- Main content -->
			<div class="content-wrapper">

				<!-- Registration form -->
				<form action="http://demo.interface.club/limitless/layout_3/LTR/material/index/html">
					<div class="row">
						<div class="col-lg-6 col-lg-offset-3">
							<div class="panel registration-form">
								<ul class="nav nav-tabs nav-justified nav-tab-highlight">
				                    <li class="active"><a id="navtab1"><h6>Step 1</h6></a></li>
				                    <li><a id="navtab2" onclick="event.preventDefault();"><h6>Step 2</h6></a></li>
				                    <li><a id="navtab3" onclick="event.preventDefault();"><h6>Step 3</h6></a></li>
				                    <li><a id="navtab4" onclick="event.preventDefault();"><h6>Step 4</h6></a></li>
				                </ul>
				                <div class="tab-content">
									<div class="panel-body tab-pane fade in active" id="step1">
										<!-- Accordion with left control button -->
										<h6 class="content-group text-semibold">Left control icon <small class="display-block">All fields are <code>required</code> except stated otherwise</small></h6>

										<div class="panel-group panel-group-control content-group-lg" id="personal-information">
											<div class="panel">
												<div class="panel-heading bg-danger">
													<h6 class="panel-title">
														<a data-toggle="collapse" data-parent="#personal-information" href="#name">Name</a>
													</h6>
												</div>
												<div id="name" class="panel-collapse collapse in">
													<div class="panel-body">
														<div class="row">
															<div class="col-sm-4">
																<div class="form-group has-feedback">
																	<input type="text" class="form-control" required name="firstname" value="{{old('firstname')}}" placeholder="First Name">
																	<div class="form-control-feedback">
																		<i class="icon-user-check text-npa-red"></i>
																	</div>
																</div>
																@if($errors->has('firstname'))
																<div class="help-block">
																	<strong>{{$errors->first('firstname')}}</strong>
																</div>
																@endif
															</div>
															<div class="col-sm-4">
																<div class="form-group has-feedback">
																	<input type="text" class="form-control" required name="middlename" value="{{old('middlename')}}" placeholder="Middle Name(Optional)">
																	<div class="form-control-feedback">
																		<i class="icon-user-check text-npa-red"></i>
																	</div>
																</div>
																@if($errors->has('middlename'))
																<div class="help-block">
																	<strong>{{$errors->first('middlename')}}</strong>
																</div>
																@endif
															</div>
															<div class="col-sm-4">
																<div class="form-group has-feedback">
																	<input type="text" class="form-control" required name="lastname" value="{{old('lastname')}}" placeholder="Last Name">
																	<div class="form-control-feedback">
																		<i class="icon-user-check text-npa-red"></i>
																	</div>
																</div>
																@if($errors->has('lastname'))
																<div class="help-block">
																	<strong>{{$errors->first('lastname')}}</strong>
																</div>
																@endif
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="input-group">
																	<div class="input-group-addon bg-green-400">
																	<span class="addon-text">Gender</span></div>										
																	<select class="form-control" name="gender" required>
																		<option value="" class="text-muted">-- None --</option>
																		<option @if(old('Female') == 'Female') selected @endif value="Female">Female</option>
																		<option @if(old('Male') == 'Male') selected @endif value="Male">Male</option>
																	</select>
																</div>
																@if($errors->has('gender'))
																<div class="help-block">
																	<strong>{{$errors->first('gender')}}</strong>
																</div>
																@endif
															</div>

															<div class="col-sm-6">
																<div class="input-group">
																	<div class="input-group-addon bg-green-400">
																		<span class="addon-text">Prefix</span>
																	</div>
																	<select class="form-control" name="prefix" required>
																		<option value="" class="text-muted">--None--</option>
																	<?php $titles = ['Dr','Miss','Mr','Mrs','Ms','Prof']; ?>
																	@foreach($titles as $title)
																		@if(old('prefix') == $title)
																		<option selected value="{{$title}}">{{$title}}</option>
																		@else
																		<option value="{{$title}}">{{$title}}</option>
																		@endif
																	@endforeach
																	</select>
																</div>
																@if($errors->has('prefix'))
																<div class="help-block">
																	<strong>{{$errors->first('prefix')}}</strong>
																</div>
																@endif
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading bg-danger">
													<h6 class="panel-title">
														<a class="collapsed" data-toggle="collapse" data-parent="#personal-information" href="#contact-info">Contact Information</a>
													</h6>
												</div>
												<div id="contact-info" class="panel-collapse collapse">
													<div class="panel-body">
														<div class="row">
															<div class="col-sm-4">
																<label for="country">Country</label>
																<div class="form-group has-feedback">
																	<select id="country" class="form-control" required name="country">
																		<option>-- Select Country --</option>
																		<option value="Nigeria">Nigeria</option>
																		<option>Ghana</option>
																		<option>SouthAfrica</option>
																	</select>
																	<div class="form-control-feedback">
																		<i class="icon-earth text-npa-red"></i>
																	</div>
																</div>
																@if($errors->has('country'))
																<div class="help-block">
																	<strong>{{$errors->first('country')}}</strong>
																</div>
																@endif
															</div>
															<div class="col-sm-4">
																<label for="state">State</label>
																<div class="form-group has-feedback">
																	<select id="state" class="form-control" required name="state">
																		<option>-- Select State --</option>
																		<option>Abia</option>
																		<option>Adamawa</option>
																		<option>Akwa-Ibom</option>
																		<option>Anambra</option>
																		<option>Benue</option>
																		<option>Cross-River</option>
																		<option>Delta</option>
																		<option>Ebonyi</option>
																		<option>Enugu</option>
																		<option>Edo</option>
																		<option value="Lagos">Lagos</option>
																	</select>
																	<div class="form-control-feedback">
																		<i class="icon-location4 text-npa-red"></i>
																	</div>
																</div>
																@if($errors->has('state'))
																<div class="help-block">
																	<strong>{{$errors->first('state')}}</strong>
																</div>
																@endif
															</div>
															<div class="col-sm-4">
																<label for="city">City</label>
																<div class="form-group has-feedback">
																	<select id="city" class="form-control" required name="city">
																		<option>-- Select City --</option>
																		<option>Yaba</option>
																		<option>Surulere</option>
																		<option>Ikeja</option>
																		<option>Ikorodu</option>
																		<option>Victoria-Island</option>
																	</select>
																	<div class="form-control-feedback">
																		<i class="icon-location3 text-npa-red"></i>
																	</div>
																</div>
																@if($errors->has('city'))
																<div class="help-block">
																	<strong>{{$errors->first('city')}}</strong>
																</div>
																@endif
															</div>
														</div>
														<div class="row">
															<div class="col-sm-8">
																<div class="form-group has-feedback">
																	<input type="text" class="form-control" required name="street" value="{{old('street')}}" placeholder="Street Address">
																	<div class="form-control-feedback">
																		<i class="icon-direction text-npa-red"></i>
																	</div>
																</div>
																@if($errors->has('street'))
																<div class="help-block">
																	<strong>{{$errors->first('street')}}</strong>
																</div>
																@endif
															</div>
															<div class="col-sm-4">
																<div class="form-group has-feedback">
																	<input type="text" class="form-control" required name="zip" value="{{old('zip')}}" placeholder="Zip/Postal Code">
																	<div class="form-control-feedback">
																		<i class="icon-pushpin text-npa-red"></i>
																	</div>
																</div>
																@if($errors->has('zip'))
																<div class="help-block">
																	<strong>{{$errors->first('zip')}}</strong>
																</div>
																@endif
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group has-feedback">
																	<input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Your email">
																	<div class="form-control-feedback">
																		<i class="icon-mention text-npa-red"></i>
																	</div>
																</div>
																@if($errors->has('email'))
																<div class="help-block">
																	<strong>{{$errors->first('email')}}</strong>
																</div>
																@endif
															</div>
															<div class="col-sm-6">
																<div class="form-group has-feedback">
																	<input type="email" class="form-control" name="email-confirmation" value="{{old('email-confirmation')}}" placeholder="Repeat email">
																	<div class="form-control-feedback">
																		<i class="icon-mention text-npa-red"></i>
																	</div>
																</div>
																@if($errors->has('email-confirmation'))
																<div class="help-block">
																	<strong>{{$errors->first('email-confirmation')}}</strong>
																</div>
																@endif
															</div>
															<div class="col-sm-6">
																<div class="form-group has-feedback">
																	<input type="text" class="form-control" name="m-phone" value="{{old('phone')}}" placeholder="Mobile Phone">
																	<div class="form-control-feedback">
																		<i class="icon-iphone text-npa-red"></i>
																	</div>
																</div>
																@if($errors->has('m-phone'))
																<div class="help-block">
																	<strong>{{$errors->first('m-phone')}}</strong>
																</div>
																@endif
															</div>
															<div class="clearfix"></div>
															<div class="col-sm-6">
																<div class="form-group has-feedback">
																	<input type="text" class="form-control" name="work-phone" value="{{old('work-phone')}}" placeholder="Work Phone">
																	<div class="form-control-feedback">
																		<i class="icon-phone2 text-npa-red"></i>
																	</div>
																</div>
																@if($errors->has('work-phone'))
																<div class="help-block">
																	<strong>{{$errors->first('work-phone')}}</strong>
																</div>
																@endif
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading bg-danger">
													<h6 class="panel-title">
														<a class="collapsed" data-toggle="collapse" data-parent="#personal-information" href="#about-you">About Yourself</a>
													</h6>
												</div>
												<div id="about-you" class="panel-collapse collapse">
													<div class="panel-body">
														<div class="row">
															<p>Date of Birth</p>
															<div class="col-sm-4">
																<div class="input-group">
																	<div class="input-group-addon">
																		<i class="icon-calendar text-npa-red"></i>
																	</div>
																	<select class="form-control" required name="month">
																		<option>-- Select Month --</option>
																		<option value="1">January</option>
																		<option value="2">February</option>
																		<option value="3">March</option>
																	</select>
																</div>
																@if($errors->has('month'))
																<div class="help-block">
																	<strong>{{$errors->first('month')}}</strong>
																</div>
																@endif
															</div>
															<div class="col-sm-4">
																<div class="input-group">
																	<div class="input-group-addon">
																		<i class="icon-calendar text-npa-red"></i>
																	</div>
																	<select class="form-control" required name="dob-day">
																		<option>-- Select Day --</option>
																	@for($i=1; $i<=31;$i++)
																		@if(old('dob-day') == $i)
																		<option value="{{$i}}" selected>{{$i}}</option>
																		@else
																		<option value="{{$i}}">{{$i}}</option>
																		@endif
																	@endfor
																	</select>
																</div>
																@if($errors->has('dob-day'))
																<div class="help-block">
																	<strong>{{$errors->first('dob-day')}}</strong>
																</div>
																@endif
															</div>
															<div class="col-sm-4">
																<div class="input-group">
																	<div class="input-group-addon">
																		<i class="icon-calendar text-npa-red"></i>
																	</div>
																	<select class="form-control" required name="dob-year">
																		<option>-- Select Year --</option>
																	<?php $now = date('Y'); $maxyr = $now - 15; ?>
																	@for($i=1930; $i <= $maxyr; $i++)
																		@if(old('dob-year') == $i)
																		<option value="{{$i}}" selected>{{$i}}</option>
																		@else
																		<option value="{{$i}}">{{$i}}</option>
																		@endif
																	@endfor
																	</select>
																</div>
																@if($errors->has('dob-year'))
																<div class="help-block">
																	<strong>{{$errors->first('dob-year')}}</strong>
																</div>
																@endif
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="text-right">
											<a data-toggle="tab" href="#step2" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10"><b><i class="icon-arrow-right14"></i></b> Next</a>
										</div>
									</div>
									<div class="panel-body tab-pane fade" id="step2">
										<div class="">
											<h2>Step2</h2>
											<h5 class="content-group-lg"><small class="display-block">All fields are required except stated otherwise</small></h5>
										</div>

										<div class="form-group has-feedback">
											<input type="text" class="form-control" placeholder="Choose username">
											<div class="form-control-feedback">
												<i class="icon-user-plus text-npa-red"></i>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="text" class="form-control" placeholder="First name">
													<div class="form-control-feedback">
														<i class="icon-user-check text-npa-red"></i>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="text" class="form-control" placeholder="Second name">
													<div class="form-control-feedback">
														<i class="icon-user-check text-npa-red"></i>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="password" class="form-control" placeholder="Create password">
													<div class="form-control-feedback">
														<i class="icon-user-lock text-npa-red"></i>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="password" class="form-control" placeholder="Repeat password">
													<div class="form-control-feedback">
														<i class="icon-user-lock text-npa-red"></i>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="email" class="form-control" placeholder="Your email">
													<div class="form-control-feedback">
														<i class="icon-mention text-npa-red"></i>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="email" class="form-control" placeholder="Repeat email">
													<div class="form-control-feedback">
														<i class="icon-mention text-npa-red"></i>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="checkbox">
												<label>
													<input type="checkbox" class="styled" checked="checked">
													Send me <a href="#">test account settings</a>
												</label>
											</div>

											<div class="checkbox">
												<label>
													<input type="checkbox" class="styled" checked="checked">
													Subscribe to monthly newsletter
												</label>
											</div>

											<div class="checkbox">
												<label>
													<input type="checkbox" class="styled">
													Accept <a href="#">terms of service</a>
												</label>
											</div>
										</div>

										<div class="text-right">
											<a data-toggle="tab" href="#step1"><button class="btn bg-grey-400 btn-labeled btn-labeled-left ml-10"><b><i class="icon-arrow-left13"></i></b> Back</button></a>
											<a data-toggle="tab" href="#step3"><button class="btn bg-green-400 btn-labeled btn-labeled-right ml-10"><b><i class="icon-arrow-right14"></i></b> Next</button></a>
										</div>
									</div>
									<div class="panel-body tab-pane fade" id="step3">
										<div class="">
											<h2>Step3</h2>
											<h5 class="content-group-lg"><small class="display-block">All fields are required except stated otherwise</small></h5>
										</div>

										<div class="form-group has-feedback">
											<input type="text" class="form-control" placeholder="Choose username">
											<div class="form-control-feedback">
												<i class="icon-user-plus text-npa-red"></i>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="text" class="form-control" placeholder="First name">
													<div class="form-control-feedback">
														<i class="icon-user-check text-npa-red"></i>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="text" class="form-control" placeholder="Second name">
													<div class="form-control-feedback">
														<i class="icon-user-check text-npa-red"></i>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="password" class="form-control" placeholder="Create password">
													<div class="form-control-feedback">
														<i class="icon-user-lock text-npa-red"></i>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="password" class="form-control" placeholder="Repeat password">
													<div class="form-control-feedback">
														<i class="icon-user-lock text-npa-red"></i>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="email" class="form-control" placeholder="Your email">
													<div class="form-control-feedback">
														<i class="icon-mention text-npa-red"></i>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="email" class="form-control" placeholder="Repeat email">
													<div class="form-control-feedback">
														<i class="icon-mention text-npa-red"></i>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="checkbox">
												<label>
													<input type="checkbox" class="styled" checked="checked">
													Send me <a href="#">test account settings</a>
												</label>
											</div>

											<div class="checkbox">
												<label>
													<input type="checkbox" class="styled" checked="checked">
													Subscribe to monthly newsletter
												</label>
											</div>

											<div class="checkbox">
												<label>
													<input type="checkbox" class="styled">
													Accept <a href="#">terms of service</a>
												</label>
											</div>
										</div>

										<div class="text-right">
											<button type="submit" class="btn btn-link"><i class="icon-arrow-left13 position-left"></i> Back to login form</button>
											<button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10"><b><i class="icon-plus3"></i></b> Create account</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				<!-- /registration form -->

			</div>
			<!-- /main content -->
@endsection
@section('more-scripts')
<script src="/portal-assets/js/jquery.validate.js"></script>
@endsection
