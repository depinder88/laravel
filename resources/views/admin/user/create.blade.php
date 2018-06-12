@extends('layout.adminlayout')
<?php if(isset($user) && $user->id){ ?>
@section('title','Edit User')
<?php }else{ ?>
@section('title','Create Bucket')
<?php } ?>


@section('body')
 <section class="panel">
            <!--div class="panel-heading">
                <h3>Basic Form Elements</h3>
            </div-->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
						<div class="togle-btn pull-right">
							 <div class="dropdown inner-drpdwn">
								<a href="javascript: void(0);" class="dropdown-toggle dropdown-inline-button" data-toggle="dropdown" aria-expanded="false">
									<span class="hidden-lg-down">User Management</span>
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" aria-labelledby="" role="menu">
									<a class="dropdown-item" href="{{url('admin/user')}}">User</a>
									
								</ul>
							</div> 
						</div>	
						<?php if(isset($user) && $user->id){ 
							?>
							{!! Form::model($user, array('class' => '', 'id' => 'bucketstypeform', 'method' => 'PATCH', 'route' => array('user.update', $user->id))) !!}
							<?php }else{ ?>
							{!! Form::open(array('route' => 'user.store', 'id' => 'bucketstypeform', 'class' => '')) !!} 
							  <?php   
								} ?>
					
                        <div class="margin-bottom-50 form-width">
                            <!--<div class="dashboard-buttons">
                                <a href="{{url('admin/buckets')}}" class="btn btn-primary width-200 margin-top-10">
                                    <i class="fa fa-long-arrow-left margin-right-5"></i>
                                    Back
                                </a>
                            </div>-->
							<div class="margin-bottom-50">
								<span style="margin-right: 10px;position: relative;top: -20px;">You are here:</span>
								<ul class="list-unstyled breadcrumb breadcrumb-custom">
									<li>
										<a href="{{url('admin/dashboard')}}">Home</a>
									</li>
									<li>
										<a href="{{url('admin/user')}}">User</a>
									</li>
									<li>
										<span>
											@if(isset($user) && $user->id)
											Edit
											@else
											Create
											@endif 
											User
										</span>
									</li>
								</ul>
							</div>
							<div class="col-md-12 no-pade">
								<div class="col-xs-12 col-md-6 no-pade">
									<h4>
									 @if(isset($user) && $user->id)
										Edit
										@else
										Create
										@endif 
										User
									</h4>
									<br />
									<!-- Vertical Form -->
								</div>
								@if (count($errors) > 0)
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
							</div>	
								
                      {{ csrf_field() }}
                      @if(isset($user) && $user->id)
                      {{ method_field('PUT') }}
                       @endif 
                                <div class="row">
									<div class="col-xs-12">
                                        <div class="form-group form-margin-btm">
											<div class="col-xs-12 col-sm-3">
												<label for="l33">First Name</label>
											</div>
											<div class="col-xs-12 col-sm-9">
												<div class="form-input-icon">
													<input type="text" class="form-control" placeholder="First Name" id="name" name="name" value="<?php if(isset($user)){ echo $user->name; } ?>">
												</div>
											</div>
                                        </div>
                                    </div>
									
									<div class="col-xs-12">
                                        <div class="form-group form-margin-btm">
											<div class="col-xs-12 col-sm-3">
												<label for="l33">Last Name</label>
											</div>
											<div class="col-xs-12 col-sm-9">
												<div class="form-input-icon">
													<input type="text" class="form-control" placeholder="Last Name" id="lname" name="lname" value="<?php if(isset($user)){ echo $user->lname; } ?>">
												</div>
											</div>
                                        </div>
                                    </div>
									
									<div class="col-xs-12">
                                        <div class="form-group form-margin-btm">
											<div class="col-xs-12 col-sm-3">
												<label for="l33">Email</label>
											</div>
											<div class="col-xs-12 col-sm-9">
												<div class="form-input-icon">
													<input type="text" class="form-control" placeholder="Email ID" id="email" name="email" value="<?php if(isset($user)){ echo $user->email; } ?>" readonly >
												</div>
											</div>
                                        </div>
                                    </div>
									
									<div class="col-xs-12">
                                        <div class="form-group form-margin-btm">
											<div class="col-xs-12 col-sm-3">
												<label for="l33">Phone Number</label>
											</div>
											<div class="col-xs-12 col-sm-9">
												<div class="form-input-icon">
													<input type="text" class="form-control" placeholder="Phone Number" id="phone" name="phone" value="<?php if(isset($user)){ echo $user->phone; } ?>">
												</div>
											</div>
                                        </div>
                                    </div>
									
									<div class="col-xs-12">
                                        <div class="form-group form-margin-btm">
											<div class="col-xs-12 col-sm-3">
												<label for="l33">Mobile Number</label>
											</div>
											<div class="col-xs-12 col-sm-9">
												<div class="form-input-icon">
													<input type="text" class="form-control" placeholder="Mobile Number" id="mobile" name="mobile" value="<?php if(isset($user)){ echo $user->mobile; } ?>">
												</div>
											</div>
                                        </div>
                                    </div>
									
									<?php
									if(isset($user->created_by) && (!empty($user->created_by)))
									   { 
								  ?>  
									  <input type="hidden" id="updated_at" name="updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>" required="required" class="form-control col-md-7 col-xs-12">
								   <?php }else{?>
									 
									  <input type="hidden" id="created_date" name="created_date" value="<?php echo date('Y-m-d H:i:s'); ?>" required="required" class="form-control col-md-7 col-xs-12">
									  
								  <?php }?>
					  	  
									<div class="col-xs-12">
										<div class="form-group form-margin-btm">
											<div class="col-xs-12 col-sm-3">
												<label for="l33">Address</label>
											</div>
											<div class="col-xs-12 col-sm-9">
												<div class="form-input-icon">
													<textarea id="address" name="address"  required="required" class="form-control"><?php if(isset($user)){ echo $user->address; } ?></textarea>
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-xs-12">
                                        <div class="form-group form-margin-btm">
											<div class="col-xs-12 col-sm-3">
												<label for="l33">City</label>
											</div>
											<div class="col-xs-12 col-sm-9">
												<div class="form-input-icon">
													<input type="text" class="form-control" placeholder="City" id="city" name="city" value="<?php if(isset($user)){ echo $user->city; } ?>">
												</div>
											</div>
                                        </div>
                                    </div>
									
									<div class="col-xs-12">
                                        <div class="form-group form-margin-btm">
											<div class="col-xs-12 col-sm-3">
												<label for="l33">State</label>
											</div>
											<div class="col-xs-12 col-sm-9">
												<div class="form-input-icon">
													<input type="text" class="form-control" placeholder="Mobile Number" id="state" name="state" value="<?php if(isset($user)){ echo $user->state; } ?>">
												</div>
											</div>
                                        </div>
                                    </div>
									
									<div class="col-xs-12">
                                        <div class="form-group form-margin-btm">
											<div class="col-xs-12 col-sm-3">
												<label for="l33">Zip</label>
											</div>
											<div class="col-xs-12 col-sm-9">
												<div class="form-input-icon">
													<input type="text" class="form-control" placeholder="Zip" id="zip" name="zip" value="<?php if(isset($user)){ echo $user->zip; } ?>">
												</div>
											</div>
                                        </div>
                                    </div>
									
									
									<div class="col-xs-12">
										<div class="form-group">
											<div class="col-xs-12 col-sm-3">
												<label>Status</label>
											</div>
											<div class="col-xs-12 col-sm-9">
												<div class="btn-group" data-toggle="buttons">
													<label class="active-btn btn btn-default active">
														<input type="radio" id="status" name="status" value="active" <?php if(isset($user) && $user->status=='active'){ echo "checked"; } ?>>
														Active
													</label>
													<label class="inactive-btn btn btn-default">
														<input type="radio" id="status" name="status" value="inactive" <?php if(isset($user) && $user->status=='inactive'){ echo "checked"; } ?>>
													   Inactive
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
                                <div class="col-xs-12 form-actions">
                                    <button type="submit" class="btn btn-primary width-150">
										@if(isset($user) && $user->id)
											Save Changes
											@else
											Submit
											@endif 
											
									</button>
									<a href="{{url('admin/user')}}"><button type="button" class="btn btn-default width-150">Cancel</button></a>
                                </div>
                            
                            <!-- End Vertical Form -->
                        </div>
						 </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Dashboard -->

        <!-- Page Scripts -->
	
@endsection