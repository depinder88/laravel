@extends('layout.adminlayout')

<?php if(isset($blog) && $blog->id){ ?>
@section('title','Edit Blog')
<?php }else{ ?>
@section('title','Create Blog')
<?php } ?>

@section('body')

        <!-- Portfolio -->
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
									<span class="hidden-lg-down">Blog Management</span>
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" aria-labelledby="" role="menu">
									<a class="dropdown-item" href="{{url('admin/blog')}}">Blog</a>
									<!--div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="dropdown-icon icmn-cog"></i> Settings</a-->
								</ul>
							</div> 
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
							
						 <?php if(isset($blog) && $blog->id){ 
							?>
							{!! Form::model($blog, array('class' => '', 'id' => 'Portfoliotypeform', 'method' => 'PATCH', 'route' => array('blog.update', $blog->id))) !!}
							<?php }else{ ?>
							{!! Form::open(array('route' => 'blog.store', 'id' => 'Portfoliotypeform', 'class' => '')) !!} 
							  <?php   
								} ?>
								
							
								 {{ csrf_field() }}
                      @if(isset($blog) && $blog->id)
                      {{ method_field('PUT') }}
                       @endif 
                        <div class="margin-bottom-50 form-width">
                            <!--div class="dashboard-buttons">
                                <a href="{{url('admin/portfolio')}}" class="btn btn-primary width-200 margin-top-10">
                                    <i class="fa fa-long-arrow-left margin-right-5"></i>
                                    Back
                                </a>
                            </div-->
							<div class="margin-bottom-50">
								<ul class="list-unstyled breadcrumb breadcrumb-custom">
									<li>
										<a href="{{url('admin/dashboard')}}">Home</a>
									</li>
									<li>
										<a href="{{url('admin/blog')}}">Blog</a>
									</li>
									<li>
										<span>
											@if(isset($blog) && $blog->id)
											Edit
											@else
											Create
											@endif 
											Blog
										</span>
									</li>
								</ul>
							</div>
							
							<div class="col-md-12 no-pade">
								<div class="col-xs-12 col-md-6 no-pade">
									<h4>
									@if(isset($title) && $title->id)
									Edit
									@else
									Create
									@endif 
									Post</h4>
									<br />
									<!-- Vertical Form -->
								</div>
							</div>		
								 
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group form-margin-btm">
										<div class="col-xs-12 col-sm-3">
											<label for="l33">Title</label>
										</div>
										<div class="col-xs-12 col-sm-9">
											<div class="form-input-icon">
												<input type="text" class="form-control" placeholder="Title" id="title" name="title" value="<?php if(isset($blog)){ echo $blog->title; } ?>">
											</div>
										</div>
									</div>
								</div>
                                        
									<?php
										if(isset($blog->created_at) && (!empty($blog->created_at)))
										   { 
									  ?>  
                                        <input type="hidden" id="updated_at" name="updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>" required="required" class="form-control col-md-7 col-xs-12">
									   <?php }else{?>
										 
                                        <input type="hidden" id="created_at" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>" required="required" class="form-control col-md-7 col-xs-12">
									  <?php }?>
									  
									<div class="col-xs-12">
                                        <div class="form-group form-margin-btm">
											<div class="col-xs-12 col-sm-3">
												<label for="l33">Description</label>
											</div>
											<div class="col-xs-12 col-sm-9">
												<div class="form-input-icon">
													<textarea id="description" name="description"  required="required" class="form-control"><?php if(isset($blog)){ echo $blog->description; } ?></textarea>
												</div>
											</div>
                                        </div>
                                    </div>
                                
                                
                                <?php
                                if(isset($blog)){
                                        ?>
                                <div class="col-xs-12">
									<div class="form-group form-margin-btm">
										<div class="col-xs-12 col-sm-3">
											<label for="l33">Created On</label>
										</div>
										<div class="col-xs-12 col-sm-9">
											<div class="form-input-icon">
												<input type="text" class="form-control" placeholder="Created On" id="created_at" name="created_at" value="<?php if(isset($blog)){ echo $blog->created_at; } ?>" readonly>
											</div>
										</div>
									</div>
								</div>
                                
								<div class="col-xs-12">
									<div class="form-group form-margin-btm">
										<div class="col-xs-12 col-sm-3">
											<label for="l33">Changed On</label>
										</div>
										<div class="col-xs-12 col-sm-9">
											<div class="form-input-icon">
												<input type="text" class="form-control" placeholder="Changed On" id="updated_at" name="updated_at" value="<?php if(isset($blog)){ echo $blog->updated_at; } ?>" readonly>
											</div>
										</div>
									</div>
								</div>
                                
                               
                                <?php 
								}
								?>
                               
								<div class="col-xs-12">
									<div class="form-group">
										<div class="col-xs-12 col-sm-3">
											<label>Status</label>
										</div>
										<div class="col-xs-12 col-sm-9">
											<div class="btn-group" data-toggle="buttons">
												<label class="active-btn btn btn-default  <?php if(isset($blog) && $blog->status=='Y'){ echo "active"; } ?>">
													<input type="radio" id="status" name="status" value="Y" <?php if(isset($blog) && $blog->status=='Y'){ echo "Y"; } ?>>
													Active
												</label>
												<label class="inactive-btn btn btn-default <?php if(isset($blog) && $blog->status=='N'){ echo "active"; } ?>">
													<input type="radio" id="status" name="status" value="N" <?php if(isset($blog) && $blog->status=='N'){ echo "checked"; } ?>>
												   Inactive
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
                                <div class="col-xs-12 form-actions">
                                    <button type="submit" class="btn btn-primary width-150">
										@if(isset($blog) && $blog->id)
										Save Changes
										@else
										Submit
										@endif 
										
									</button>
                                    <a href="{{url('admin/blog')}}"><button type="button" class="btn btn-default">Cancel</button></a>
                                </div>
                            
                            <!-- End Vertical Form -->
                        </div>
						{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>
        <!-- End Dashboard -->

        <!-- Page Scripts -->
      
    
@endsection
