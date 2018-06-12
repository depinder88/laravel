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
								<label>{{$port->title }} </label>
								<br/>
								{{$port->description }}
								<hr>
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