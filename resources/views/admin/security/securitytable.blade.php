@extends('layouts.app',['elementName'=> 'security'])
@section('content')
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Security Table</h3></div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
        <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Security</li>
        </ol>
        </div>
    </div>
    <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content Header-->
<!--begin::App Content-->
<div class="container mt-3">
<style> .right-align { float: right; } </style>
<a href="security" class="right-align">Add new</a>
  <table class="table  table-hover">
    <thead>
      <tr>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Action</th>
        
      

      </tr>
      
    </thead>
    <tbody>
      
      
    
    @foreach($securitytable as $security)
    <tr>
       
        
       
        <td><img src="{{asset('images')}}/{{$security->user->image}}" class="user-image rounded-circle shadow" alt="User Image" width="100px" height="100px"
          /></td>
          {{-- src="{{asset('dist/assets/img/user2-160x160.jpg')}}" --}}
          {{-- <td><img src="{{ asset('images/' . $company->image) }}" width="100" ></td> --}}
          <td>{{$security->user->name}}</td>
          <td>{{$security->user->email}}</td>
          <td>{{$security->phone}}</td>
          <td>{{$security->address}}</td>
        <td><a  href="{{ route('securityEdit', $security->id) }}" >  Edit</a> </td>
       
        <td><a  class="text-danger" href="{{ route('securityDelete', $security->id) }}" >  Delete</a> </td>
       
        {{-- <td><img src="{{asset('images')}}/{{$security->image}}" class="user-image rounded-circle shadow" alt="User Image" width="100px" height="100px"
          /></td>
          
          <td>{{$security->name}}</td>
          <td>{{$security->email}}</td>
          <td>{{$security->phone}}</td>
          <td>{{$security->address}}</td> --}}

    </tr>
    @endforeach
   
    </tbody>
  </table>
</div>

@endSection

