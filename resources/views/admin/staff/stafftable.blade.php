@extends('layouts.app',['elementName'=> 'staff'])
@section('content')
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Staff Table</h3></div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
        <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Staff</li>
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
<a href="staff" class="right-align">Add new</a>
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
    @foreach($stafftable as $staff)
    <tr>
        <td><img src="{{asset('images')}}/{{$staff->user->image}}" class="user-image rounded-circle shadow" alt="User Image" width="100px" height="100px"
        /></td>
        {{-- src="{{asset('dist/assets/img/user2-160x160.jpg')}}" --}}
        {{-- <td><img src="{{ asset('images/' . $company->image) }}" width="100" ></td> --}}
        <td>{{$staff->user->name}}</td>
        <td>{{$staff->user->email}}</td>
        <td>{{$staff->phone}}</td>
        <td>{{$staff->address}}</td>
        {{-- <td><a  class="text-danger" href="{{ route('deleteSecurity', $security->id) }}" >  Delete</a>
        </td> --}}
        <td><a  href="{{ route('staffEdit', $staff->id) }}" >  Edit</a> </td>
       
        <td><a  class="text-danger" href="{{ route('deletestaff', $staff->id) }}" >  Delete</a> </td>
       
        

    </tr>
    @endforeach
   
    </tbody>
  </table>
</div>

@endSection

