@extends('layout.adminlayout')
@section('title','Blog | Blog')

@section('body')
    @if(Session::has('flash_message'))
    <div class="alert alert-success">
        <span class="glyphicon glyphicon-ok"></span>
        <em> {!! session('flash_message') !!}</em>
    </div>
    @endif
   
   
<section class="panel">
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
                        </ul>
                    </div>
                </div>
                <div class="margin-bottom-20">
                    <span style="margin-right: 10px;position: relative;top: -20px;">You are here:</span>
                    <ul class="list-unstyled breadcrumb breadcrumb-custom">
                        <li>
                            <a href="{{url('admin/dashboard')}}">Home</a>
                        </li>
                        <li>
                            <span>Blog</span>
                        </li>
                    </ul>
                </div>
                <h4>Post</h4>
                <div class="dashboard-buttons">
                        <a href="{{url('admin/blog/create')}}" class="btn btn-primary width-200 margin-top-10">
                        <i class="fa fa-send margin-right-5"></i>
                        Create Post
                    </a>
                    
                </div>
                           
                        <!--p>Modifier: <code>.table-inverse</code>, <code>.thead-default</code>, <code>.thead-inverse</code>, <code>.table-striped</code>, <code>.table-hovered</code></p-->
                        <br />
                        <div class="margin-bottom-50">
                            <table class="table table-inverse nowrap" id="example3" width="100%">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>

                                <tr>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                   
                                @foreach($blog as $port)
                               
								<tr>
									<td><a data-toggle="modal" data-target="#table-view-popup_{{$port->id }}">{{$port->title }}</a></td>
									<td>
										@if($port->status=='Y')
											<img src="{{asset('vendors/common/img/green.png')}}" alt="">
										@else
											<img src="{{asset('vendors/common/img/red.png')}}" alt="">
										@endif
									</td>
									<td class="action-btn" style="text-align: center; padding: 12px;">
										
										<a href="{{url('admin/blog/'.$port->id.'/edit')}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> <!--Edit--> </a>
										<form action="{{url('admin/blog/'.$port->id)}}" method="post" id="delform">
										{{ method_field('DELETE') }}
										{{ csrf_field() }}
										<a href="javascript:void(0)" onclick="var res=confirm('Are you sure you want to delete this blog'); if(res){document.getElementById('delform').submit()}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> <!--Delete--> </a>
										</form>
									   
										<!-- End  -->
									</td>
								</tr>
                           
                             

                        @endforeach
                               
                             </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
       
@endsection