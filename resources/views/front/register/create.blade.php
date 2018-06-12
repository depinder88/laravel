@extends('layout.app')
@section('title','User | Registration')

@section('body')

<section id="service" class="section-padding">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">

						<div class="register-section">
		<div class="register-icon">
			<h3>Sign up</h3>
		</div>
		<div class="register-form">
			
			 @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
			
			   @if (Session::has('message'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{Session::get('message') }}</li>
                    </ul>
                </div>
            @endif
			
			<form method="post" action="<?php echo url('store'); ?>">
				{{ csrf_field() }}
			<input type="hidden" name="remember_token" value="<?php echo md5(rand());?>" />
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-6">
							<div class="form-group">
								<label>Firstname</label>
								<input type="text" name="name" placeholder="Enter First Name">
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label>Lastname</label>
								<input type="text" name="lname" placeholder="Enter Last Name">
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" name="phone" placeholder="Enter Phone Number">
							</div>
						</div>
						
						
						<div class="col-xs-6">
							<div class="form-group">
								<label>Mobile Number</label>
								<input type="text" name="mobile" placeholder="Enter Phone Number">
								<input type="hidden" name="role_id" value="2">
							</div>
						</div>
						
						
						<div class="col-xs-6">
							<div class="form-group">
								<label>Address</label>
								<input type="text" name="address" placeholder="Enter Address">
							</div>
						</div>
						
						<div class="col-xs-6">
							<div class="form-group">
								<label>City</label>
								<input type="text" name="city" placeholder="Enter City">
							</div>
						</div>
						
						<div class="col-xs-6">
							<div class="form-group">
								<label>State</label>
								<input type="text" name="state" placeholder="Enter State">
							</div>
						</div>
						
						<div class="col-xs-6">
							<div class="form-group">
								<label>Zip</label>
								<input type="text" name="zip" placeholder="Enter Zip code">
							</div>
						</div>
						
						<div class="col-xs-6">
							<div class="form-group">
								<label>Email Address</label>
								<input type="text" name="email" placeholder="Enter Email Address">
							</div>
						</div>
						
						<div class="col-xs-6">
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" placeholder="Enter Password" data-validation="[L>=4]"
                               data-validation-message="$ must be at least 4 characters">
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label>Repeat Your Password</label>
								<input type="password" name="confirm_password" placeholder="Enter Repeat Password">
							</div>
						</div>
						
						
						<div class="col-xs-6">
							<div class="form-group checkbox-form-group">
								<label>Are you okay with our terms?</label>
								<input type="checkbox" name="agree" value="yes">I agree with our terms and conditions
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="row">
						<div class="register-button">
							<button type="submit" class="button-one">Submit</button>
							<!--a href="#" class="button-one">Sign Up</a-->
							<a href="#" class="button-two">Cancel</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	
					</div>
                </div>      
            </div>
        </section>					
						
@endsection
