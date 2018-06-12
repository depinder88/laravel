<?php
$ss =  basename($_SERVER['REQUEST_URI']);
if($ss == '')
{	
?>
<section id="banner" class="banner">
<div class="bg-color">
<?php
}
else
{	
?>
<section class="banner">
<div class="bg-color2">		
<?php
}
?>	
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container ">
				<div class="col-md-12">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				      	</button>
						
						<a class="navbar-brand" href="#">
						<img src="{{asset('images/logo.png')}}" class="img-responsive" style="width: 140px; margin-top:0px;">
						</a>
					</div>
				 	<div class="collapse navbar-collapse " id="myNavbar">
				      	<ul class="nav navbar-nav">
					   		<li> <a href="{{url('blog')}}">Blog</a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							<li> <a href=""></a> </li>
							@if (Auth::guest())
								<li><a class="btn login-btn" style="margin-right:10px;float:left;" href="{{url('login')}}">Login</a></li>
							<li><a class="btn login-btn" href="{{url('register')}}">Register</a></li>
							@else
								
							<li><a class="btn login-btn" style="margin-right:10px;" href="{{url('profile')}}/{{Auth::user()->id}}/edit">Profile</a></li>
							<li><a class="btn login-btn"  href="{{url('logout')}}">Logout</a></li>
							@endif
							
						</ul>
				    </div>
				</div>
			</div>
		</nav>
	<?php
	if($ss == '')
	{
		?>
	
		<div class="container">
			<div class="row">
				<div class="banner-info">
					<div class="banner-text text-center">
						<h1 class="lead">A portfolio and project management software to <b>plan</b>, <b>analyze</b>, <br> <b>execute</b> and <b>deliver</b> projects of all sizes.</h1>
						<p><a class="btn btn-default btn-lg" role="button">Give staging a try. It's Free!</a></p>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>
	</div>
</section> 