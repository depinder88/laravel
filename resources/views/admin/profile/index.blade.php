@extends('layout.adminlayout')
@section('title','Users | Users')
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
                                    <span class="hidden-lg-down">User Management</span>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="" role="menu">
                                    <a class="dropdown-item" href="{{url('admin/user')}}">User</a>
                                   
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
                                    <span>User Dashboard</span>
                                </li>
                            </ul>
                        </div>
                        <h4>Users</h4>
                     
                     
                        <br />
                        <div class="margin-bottom-50">
                            <table class="table table-inverse nowrap" id="example3" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>City</th>
                                    <th>Mobile Number</th>
                                    <th>Status</th>
                                    <th>Created on</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>City</th>
                                    <th>Mobile Number</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>                       
                                    @foreach($user as $user)
									<?php //echo "<pre>";print_r($buck);die;?>
                                   
                                    <tr>
                                        <td>{{$user->name }}</td>
                                        <td>{{ $user->city }}</td>
										 <td>{{ $user->mobile }}</td>
                                        <td>
                                            @if($user->status=='active')
                                                <img src="{{asset('vendors/common/img/green.png')}}" alt="">
                                           
                                            @else
                                                <img src="{{asset('vendors/common/img/red.png')}}" alt="">
                                           
                                            @endif
                                        </td>
                                       
                                       
                                    <td class="action-btn">
                                   
                                       
                                        <a href="{{url('admin/user/'.$user->id.'/edit')}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> <!--Edit--> </a>
                                       
                                       
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
        <!-- End  -->
       
   
@endsection