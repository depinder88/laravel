@extends('layout.app')
@section('title','Blog')

@section('body')

<section id="service" class="section-padding">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">

						<div class="register-section">
		<div class="register-icon">
			<h3>Blog</h3>
		</div>
		<div class="register-form">
				<div class="col-xs-12">
				 @foreach($blog as $port)
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label>{{$port->title }}  <a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#table-view-popup_{{$port->id }}"><i class="fa fa-eye" aria-hidden="true"></i> <!--view--> </a> </label>
								<br/>
								{{$port->description }}
								<hr>
							</div>
						</div>
						
					</div>
					
					<div class="modal fade table-view-popup" id="table-view-popup_{{$port->id }}" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                    <div class="modal-dialog" role="document" style="text-align:left;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                
                                            </div>
                                            <div class="modal-body">
                                                <form class="static-form">
                                                    <div class="form-group popup-brd-btm">
                                                        <div class="col-sm-5">
                                                            <p class="form-control-static">Bucket Name</p>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <p class="form-control-static"> </p>
                                                        </div>
                                                    </div>
                                                   
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                 
                                                <button type="button" class="btn" data-dismiss="modal">Close</button>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
					 @endforeach
				</div>
				
		</div>
	</div>
	
					</div>
                </div>      
            </div>
        </section>					
						
@endsection
